<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Mail;
use Session;

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
    protected $redirectTo = '/home';

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

            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {

        return User::create([
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

    protected function register(Request $request)
    {
        $input = $request->all();
        $validator = $this->validator($input);

        if($validator->passes())
        {
          $data = $this->create($input)->toArray();

          $data['token'] = str_random(25);

          $user = User::find($data['id']);
          $user->token = $data['token'];
          $user->save();

          Mail::send('mails.confirmation', $data, function($message) use($data)
          {
            $message->to($data['email']);
            $message->subject('Registration Confirmation');
          });
          return redirect(route('index'))->with('message', 'A confirmation e-mail has been sent to your email address.');
        }
        return redirect(route('index'))->with('error-message', 'E-mail or password incorrect.');
    }

    public function confirmation($token)
    {
        $user = User::where('token', $token)->first();

        if(!is_null($user))
        {
            $user -> confirmed = 1;
            $user -> token = "";
            $user -> save();
            return redirect(route('confirmation-success'))->with('message', 'Your activation is completed.');
        }
        return redirect(route('index'))->with('message', 'This e-mail is already confirmed.');
    }

    protected function confirmation_success()
    {

          return view('auth.confirmation-success');
      


    }
}
