<?php

namespace App\Http\Controllers;

use App\Application;
use App\Http\Classes\RegisterManual;
use App\Http\Interfaces\RegisterInterface;
use App\User;
use App\Userinfo;
use App\Pin;
use App\Group;
use App\UserAccess;
use App\UserInformation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Validator;
use Response;
use Redirect;
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

    public function profile()
    {
        $id                 =  request('id') ? request('id') : Auth::user()->id;

        $data['user']       = User::findorFail($id);
        $data['group']      = Group::pluck('name','id')->all();
        $data['type']       = ['Member','Officer','Faculties'];
        $data['status']     = ['Need Approval','Active','Deactivate'];
        $data['access']     = [0=>'Member',1=>'Reserve',2=>'Editor',3=>'Admin',4=>'Super Admin'];

        $data['civil_status']       = ['Single','Married','Separated'];
        $data['civil_status'] = array_combine($data['civil_status'], $data['civil_status']);
        $data['position']   = ['Member','President','Vice-president','Secretary','Treasurer'];
        $data['position']   = array_combine($data['position'], $data['position']);
        $data['work']       = ['IT/Computer','Education','Agricuture','House Wife'];
        $data['work']       = array_combine($data['work'], $data['work']);
        $data['gender']     = ['Male','Female'];
        $data['gender'] = array_combine($data['gender'], $data['gender']);

        return view('back_page.manage_user.profile',$data);
    }



    public function create(){

        $data['group']      = Group::pluck('name','id')->all();
        $data['type']       = ['Member','Officer','Faculties'];
        $data['status']     = ['Need Approval','Active','Deactivate'];
        $data['access']     = [0=>'Member',1=>'Reserve',2=>'Editor',3=>'Admin',4=>'Super Admin'];

        $data['civil_status']       = ['Single','Married','Separated'];
        $data['civil_status'] = array_combine($data['civil_status'], $data['civil_status']);
        $data['position']   = ['Member','President','Vice-president','Secretary','Treasurer'];
        $data['position']   = array_combine($data['position'], $data['position']);
        $data['work']       = ['IT/Computer','Education','Agricuture','House Wife'];
        $data['work']       = array_combine($data['work'], $data['work']);
        $data['gender']     = ['Male','Female'];
        $data['gender'] = array_combine($data['gender'], $data['gender']);

        return view('back_page.manage_user.add',$data);
    }

    public function index(Request $request)
    {
        $data['_users'] = User::paginate(10);
        return view('back_page.manage_user.users',$data); 
    }

    public function officers()
    {
        $data['_users'] = User::where('type',1)->paginate(10);
        return view('back_page.manage_user.officer',$data);
    
    }

    public function faculties()
    {
        $data['_users'] = User::where('type',2)->paginate(10);
        return view('back_page.manage_user.faculties',$data);
    }



    public function edit($id)
    {
        $data['user']       = User::findorFail($id);
        $data['group']      = Group::pluck('name','id')->all();
        $data['type']       = ['Member','Officer','Faculties'];
        $data['status']     = ['Need Approval','Active','Deactivate'];
        $data['access']     = [0=>'Member',1=>'Reserve',2=>'Editor',3=>'Admin',4=>'Super Admin'];

        $data['civil_status']       = ['Single','Married','Separated'];
        $data['civil_status'] = array_combine($data['civil_status'], $data['civil_status']);
        $data['position']   = ['Member','President','Vice-president','Secretary','Treasurer'];
        $data['position']   = array_combine($data['position'], $data['position']);
        $data['work']       = ['IT/Computer','Education','Agricuture','House Wife'];
        $data['work']       = array_combine($data['work'], $data['work']);
        $data['gender']     = ['Male','Female'];
        $data['gender'] = array_combine($data['gender'], $data['gender']);

        return view('back_page.manage_user.edit',$data);
    }

    public function store(Request $request)
    {
        $data = $request->all();



        $rules['first_name']                = "required";
        $rules['last_name']                 = "required";
        $rules['contact']                   = "required";
        $rules['email']                     = "required|unique:users,email";
        $rules['password']                  = "required";
        $rules['confirm-password']          = "required|same:password";

        request()->validate($rules);

        $pin = Pin::where('status',0);
        $pin_id = $pin->first()->id;
        $pin->update(['status'=>1]);

        $data['pin_id']     = $pin_id;
        $data['auth']       = Crypt::encrypt($data['password']);
        $data['password']   = Hash::make($data['password']);
        $user               = User::create($data);
        $userInfo           = $user->Userinfo()->create($data);


            
            
        return redirect()->route('users.index')->with('success','User created successfully.');
        
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();

        //retrieve old dataa of user

        $old      = User::findorFail($id);
        $old_data = UserInfo::findorFail($id);
        


        $data['type']               = isset($data['type']) ? $data['type'] : $old->type;
        $data['access']             = isset($data['access']) ? $data['access'] : $old->access;
        $data['position']           = isset($data['position']) ? $data['position'] : $old->position;
        $data['group_id']           = isset($data['group_id']) ? $data['group_id'] : $old->group_id;
        $data['status']             = isset($data['status']) ? $data['status'] : $old->status;
        
        $rules['group_id']          = "required|integer";

        $validator = Validator::make($data,$rules);


        if($validator->fails()) {
            return redirect()->route('user_list')->with('success','Failed to Update.');
        } 
        else{

            $user['group_id']           = $data['group_id'];
            $user['status']             = $data['status'];
            $user['email']              = $data['email'];
            $user['type']               = $data['type'];
            $user['access']             = $data['access'];
            $user['position']           = $data['position'];
                                        User::where('id',$id)->update($user);

            $image_name = $old_data->profile;

            if($request->file('profile') != null){

                $image = $request->file('profile');

                $image_name = "/images/profile-".time().'.'.$image->getClientOriginalExtension();
                $image->move(public_path().'/images/', $image_name);
            }

            $userinfo['contact']        = isset($data['contact']) ? $data['contact'] : $old_data->contact;
            $userinfo['birthdate']      = isset($data['birthdate']) ? $data['birthdate'] : $old_data->birthdate;
            $userinfo['address']        = isset($data['address']) ? $data['address'] : $old_data->address;
            $userinfo['college_school'] = isset($data['college_school']) ? $data['college_school'] : $old_data->college_school;
            $userinfo['high_school']    = isset($data['high_school']) ? $data['high_school'] : $old_data->high_school;
            $userinfo['biography']      = isset($data['biography']) ? $data['biography'] : $old_data->biography;
            $userinfo['work']           = isset($data['work']) ? $data['work'] : $old_data->work;

            $userinfo['fb_link']        = isset($data['fb_link']) ? $data['fb_link'] : $old_data->fb_link;
            $userinfo['twitter_link']   = isset($data['twitter_link']) ? $data['twitter_link'] : $old_data->twitter_link;
            $userinfo['linkedin_link']   = isset($data['linkedin_link']) ? $data['linkedin_link'] : $old_data->linkedin_link;
            $userinfo['instagram_link']   = isset($data['instagram_link']) ? $data['instagram_link'] : $old_data->instagram_link;

            $userinfo['profile']        = $image_name;
            $userinfo['first_name']     = $data['first_name'];
            $userinfo['middle_name']    = $data['middle_name'];
            $userinfo['last_name']      = $data['last_name'];
            $userinfo['gender']         = isset($data['gender']) ? $data['gender'] : $old_data->gender;
            $userinfo['civil_status']   = isset($data['civil_status']) ? $data['civil_status'] : $old_data->civil_status;
                                        $check = Userinfo::where('user_id',$id)->update($userinfo);

            if($id == Auth::user()->id){
                return redirect()->route('profile')->with('success','Profile Updated successfully.');
            }
            return redirect()->route('users.index')->with('success','User Updated successfully.');
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
