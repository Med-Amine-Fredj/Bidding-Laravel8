<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
    protected $redirectTo = RouteServiceProvider::HOME;

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
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'ville' => ['required', 'string', 'max:255'],
            'numtel' => ['required'],
            'profile_image' =>['sometimes','image','mimes:jpg,jpeg,bmp,svg,png','max:5000'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
        {
            if(request()->has('profile_image'))
            {
                $p_image=request()->file('profile_image');
                $extension=$p_image->extension();
                $p_name=time().'.'. $extension;
                $p_image->move(public_path("user_image"),$p_name);

                return User::create([
                    'name' => $data['name'],
                    'email' => $data['email'],
                    'numtel' => $data['numtel'],
                    'ville' => $data['ville'],
                    'password' => Hash::make($data['password']),
                    'profile_image' =>$p_name,
                    ]);
            }
            return User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'numtel' => $data['numtel'],
                'ville' => $data['ville'],
                'password' => Hash::make($data['password']),
            ]);

        }
}
