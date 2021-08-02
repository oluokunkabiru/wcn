<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Notifications\ActivatorNofification;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Validator;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

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
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'string',  'max:15', 'unique:users'],
            'born' => ['required', 'string'],
            'password' => ['required', 'string', 'min:5', 'confirmed'],
            'avatar' => ['required','image', 'mimes:png,jpg,jpeg'],
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
        $user =  User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'born_again_status' => $data['born'],
            'role' => 'member',
            'password' => Hash::make($data['password']),
            'status' => 0,
        ]);
        // $avatar = new Media();
        $collection = "avatar";
             $fileName = $data['name'].'.png';
             $user->addMediaFromRequest('avatar')->usingFileName($fileName)->toMediaCollection($collection);
            Setting::create([
                'user_id' => $user->id,
                'email_notification' =>0,
                'blog_notification' =>0,
                'comment_notification' =>0,
                'nugget_notification' =>0,
                'gallery_notification' =>0,
                'event_notification' =>0,
                'book_notification' =>0,

            ]);

            $admins = User::where('role', 'admin')->get();
            foreach($admins as $admin){
                Notification::send($admin, new ActivatorNofification("User","New member registered"));
           }
             return $user;
            }
}
