<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
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
        $this->middleware('guest')->except('logout');
    }


    public function index()
    {
        Session::put('url.intended', url()->previous());
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function user_login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $remember = $request->has('remember');
        if (Auth::guard('web')->attempt($credentials)) {
            Log::debug('User login successful', ['email' => $credentials['email']]);
            $intendedUrl = Session::get('url.intended');
           
            return redirect()->back();
        } else {
            Log::debug('User login failed', ['email' => $credentials['email']]);
            return redirect()->back()->withErrors([
                'email' => 'Invalid credentials.',
            ]);
        }
    }
    
    public function user_register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'mobile' => 'required',
            'address' => 'required',
            'pin' => 'required',
            'password' => 'required|min:6|confirmed',
            'role_access' => 'array'
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->mobile = $request->mobile;
        $user->address = $request->address;
        $user->pin = $request->pin;
        $user->password = Hash::make($request->password);
        $user->save();

        // $user->assignRole('user');
        // $user->givePermissionTo($request->role_access);

        return redirect('/login')->with('success', 'User registered successfully.');
    }

    public function logout()
    {
        Auth::guard('web')->logout();

        return redirect()->back();
    }


   
}
