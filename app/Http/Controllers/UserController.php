<?php

namespace App\Http\Controllers;

use App\Application;
use App\Http\Classes\RegisterManual;
use App\Http\Interfaces\RegisterInterface;
use App\User;
use App\UserAccess;
use App\UserInformation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Validator;
use Response;
class UserController extends Controller
{
    private $model;
    public function __construct(User $model)
    {
        $this->middleware('auth');
        $this->model = $model;

        Validator::extend('alpha_spaces', function ($attribute, $value) {
            return preg_match('/^[\pL\s]+$/u', $value); 
        });
    }



    // public function loadWithRelatedModel(){
    //     $this->model = $this->model->with(['userInformation', 'userInformation.country', 'userInformation.role',
    //         'userInformation.gallery', 'userInformation.cover','userAccesses', 'applications', 'shop', 'author']); //lazy loader
    // }
    public function create(){
        return view('back_page.maintenance.manage_user.user_add');
    }

    public function index(Request $request)
    {
        $data['_users'] = User::paginate(10);
        return view('back_page.maintenance.users',$data);
    }

    public function officer_list()
    {
        $data['_users'] = User::paginate(10);
        return view('back_page.maintenance.officer',$data);
    }

    public function show(Request $request)
    {
        $id = Request('id');
        $data['data'] = User::findorFail($id);
        return view('back_page.maintenance.manage_user.user_edit',$data);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data['group_id'] = 1;
        $data['password'] = "secret";
        $data['password_confirmation'] = "secret";
        $rules['first_name']                = "required";
        $rules['middle_name']               = "required";
        $rules['last_name']                 = "required";
        $rules['contact']                   = "required";
        // $rules['birthdate']                 = "required";
        $rules['gender']                    = "required";
        $rules['email']                     = "required|unique:users,email";
        $rules['password']                  = "required";
        $rules['password_confirmation']     = "required|same:password";
        $rules['group_id']                  = "required|integer";

        $validator = Validator::make($data,$rules);

        if($validator->fails()) {
            return Redirect::to('/alumni/register')->withErrors($validator)->withInput(Input::except('password'));
        } 
        else 
        {
            $data['name']       = $data['first_name']." ".$data['last_name'];
            $data['auth']       = Crypt::encrypt($data['password']);
            $data['password']   = Hash::make($data['password']);
            $user               = User::create($data);
            $userInfo           = $user->Userinfo()->create($data);

            
            return $userInfo;
        }
    }

    public function update(Request $request)
    {
        $data = $request->all();
        // dd($data);
        $data['group_id'] = 1;
        $rules['first_name']                = "required";
        $rules['middle_name']               = "required";
        $rules['last_name']                 = "required";
        $rules['contact']                   = "required";
        // $rules['birthdate']                 = "required";
        $rules['gender']                    = "required";
        $rules['group_id']                  = "required|integer";

        $validator = Validator::make($data,$rules);

        if($validator->fails()) {
            return "error";
        } 
        else 
        {
            $id                     = $data['id'];
            $update['name']           = $data['first_name']." ".$data['last_name'];
            $update['first_name']     = $data['first_name'];
            $update['middle_name']    = $data['middle_name'];
            $update['last_name']      = $data['last_name'];

            $update['contact']        = $data['contact'];
            $update['gender']         = $data['gender'];
            $update['email']          = $data['email'];
            $user                   = User::where('id',$id)->with(['userinfo'])->update($update);
            return $user;
        }
    }

    public function destroy(Request $request, $id)
    {
        $this->model = $this->model->find($id);
        $data =  $this->model;
        $this->model->delete();
        return response($data,200);
    }

    protected function _search()
    {
        $this->model = $this->model->where('is_admin', 0);

        $allowedField = ['email'];
        //search
        $this->model = $this->enableSearch($allowedField, $this->model);

        $allowedField = ['first_name', 'last_name', 'mobile_number'];
        $this->model = $this->searchInRelatedModel('userInformation', $this->model, $allowedField);

        if (request()->has('not_author'))
        {
            $this->model = $this->model->doesntHave('author');
            
        }
    }


    public function loadWithRelatedModel(){
        $this->model = $this->model->with(['userInformation', 'userInformation.country', 'userInformation.role',
            'userInformation.gallery', 'userInformation.cover','userAccesses', 'applications', 'shop', 'author']); //lazy loader
    }

    protected function userWithNoShop()
    {
        $this->loadWithRelatedModel();
        $this->model->doesntHave('shop')->where('is_admin', 0);
        return $this->getResultList($this->model->latest());
    }

    protected function AuthenticatedUserInfo(Request $request)
    {
        $this->loadWithRelatedModel();
        return response($this->model->find(Auth::id()), 200);
    }

    public function logoutApi()
    {
        if (Auth::check()) 
        {
            Auth::user()->AauthAcessToken()->delete();
        }
    }

    public function verifyPassword(Request $request)
    {
        if ($request->password != '' && $request->password != null)
        {
            if (Hash::check($request->password, $this->model->find(Auth::id())->password))
            {
                return $this->response($request->all(),200);
            }
            else
            {
                return response('Incorrect current password.', 301);
            }
        }
        else
        {
            return response('Incorrect current password.', 301);
        }
    }

    public function changePassword(Request $request)
    {
        if ($request->password != '' && $request->password != null && $request->new_password)
        {
            if (Hash::check($request->password, $this->model->find(Auth::id())->password))
            {
                $this->model = $this->model->find(Auth::id())->fill([
                    'crypt' =>  Crypt::encrypt($request->new_password),
                    'password' => Hash::make($request->new_password)
                ]);

                $this->model->save();

                return $this->response($request->all(),200);
            }
            else
            {
                return response('Incorrect current password.',301);
            }
        }
        else
        {
            return response('Incorrect current password.',301);
        }
    }

    public function decrypt(Request $request)
    {
        return response(Crypt::decrypt($request->password), 200);
    }
}
