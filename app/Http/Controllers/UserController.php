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

    public function index(Request $request)
    {
        // $this->loadWithRelatedModel();
        // $this->_search();
        // return $this->getResultList($this->model->latest());
        $data['_users'] = User::all();
        return view('back_page.maintenance.users',$data);
    }

    public function show(Request $request, $id)
    {
        $this->loadWithRelatedModel();
        $this->model = $this->model->find($id);
        return $this->response($this->model);
    }

    public function store(Request $request)
    {
        $rules["first_name"]                = array("required", "alpha_spaces", "min:2");
        $rules["last_name"]                 = array("required", "alpha_spaces", "min:2");
        $rules["email"]                     = array("required", "email", "unique:users");
        // $rules["mobile_number"]             = array("required", "mobile_number", "unique:user_informations");
        $rules["address"]                   = array("required");
        $rules["country_id"]                = array("required");
        $rules["password"]                  = array("required", "min:6");

        $validator = Validator::make($request->all(), $rules);

        if($validator->fails())
        {
            $return["message"]  = $validator->errors()->first();
            $return["code"]     = 300;
        }
        else
        {
            $this->model = $this->model->create([
                'crypt' =>  Crypt::encrypt($request->password),
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            $this->model->userInformation()->create([
                'country_id' => $request->country_id,
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'address' => $request->address,
                'birthday' => $request->birthday,
                'mobile_number'=> $request->mobile_number,
                'role_id' => $request->role_id,
                'dealer' => $request->dealer,
            ]);

            $this->model->applications()->sync($request->applications);

            $return["message"]  = "Successfully created an account.";
            $return["code"]     = 200;
        }

        return response($return, $return["code"]);
    }

    public function update(Request $request)
    {
        $id = Request('id');
        $this->model = $this->model->findOrFail($id)->fill($request->all());
        $this->model->userInfo()->first()->fill($request->all())->save();
        return User::findorFail($id);
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
