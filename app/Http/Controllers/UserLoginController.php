<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Session\SessionManager;

class UserLoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }


    public function showLoginForm()
    {
        return view('backend.auth.adminLogin');
    }

    protected function guard()
    {
        return Auth::guard('admin');
    }

    public function username()
    {
        return 'username';
    }

    public function login(Request $request)
    {   
    
        $input = $request->all();
  
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
        ]);

        
        $credentials = $request->only('username', 'password');
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return 'success';
            return redirect()->intended('dashboard');
        }

        if (Auth::guard('admin')->attempt($credentials, $request->has('remember')))
        {
          return 'success';
            return redirect()->intended($this->redirectPath());
        }
  
       // $fieldType = filter_var($request->username, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        if(Auth::guard('admin')->attempt(['username'=>$request->username,'password'=>$request->password],$request->filled('remember')))
        {
            return 'success';
            return redirect()->route('home');
        }else{
            return 'fail';
            return redirect()->route('login')
                ->with('error','Email-Address And Password Are Wrong.');
        }
          
    }
}
