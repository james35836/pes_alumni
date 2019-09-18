<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Group;
use App\Pin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Input;

use Auth;

use Request;
use Crypt;
use Redirect;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/alumni-dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    
    public function alumni_register()
    {
        $data['_group'] = Group::all();
        return view('auth.register',$data);
    }

    public function alumni_register_submit()
    {
        $data = Request::all();
        $rules['first_name']                = "required";
        $rules['middle_name']               = "required";
        $rules['last_name']                 = "required";
        $rules['contact']                   = "required";
        $rules['birthdate']                 = "required";
        $rules['gender']                    = "required";
        // $rules['pin_id']                      = "required";
        $rules['work']                      = "required";
        $rules['email']                     = "required|unique:users,email";
        $rules['password']                  = "required";
        $rules['password_confirmation']     = "required|same:password";
        $rules['group_id']                  = "required|integer";

        $validator = Validator::make($data,$rules);

        if($validator->fails()) {
            return Redirect::to('/sign-up')->withErrors($validator)->withInput(Input::except('password'));
        } 
        else{
            $pin = Pin::where('status',0);
            $pin_id = $pin->first()->id;
            $pin->update(['status'=>1]);

            $data['pin_id']     = $pin_id;
            
            $data['auth']       = Crypt::encrypt($data['password']);
            $data['password']   = Hash::make($data['password']);
            $user               = User::create($data);
            $userInfo           = $user->Userinfo()->create($data);

            Auth::login($user, true);
            return redirect($this->redirectTo);
        }

    }
}
