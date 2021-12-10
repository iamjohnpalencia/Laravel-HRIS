<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CustomAuthController extends Controller
{

    public function index()
    {
        return view('auth.login');
    }  
      

    public function customLogin(Request $request)
    {
        $request->validate([
            'accountcode' => 'required',
            'usercode' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('accountcode','usercode', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('home')
                        ->withSuccess('Logged-in');
        }

        //return redirect("login")->withSuccess('Credentials are wrong.');
        return redirect("login")->withErrors(
            [
                'accountcode' => 'Invalid Credentials!'
                //,'usercode' => 'User code does not exist!'
            ]
        );
    }



    public function registration()
    {
        return view('auth.registration');
    }
      

    public function customRegistration(Request $request)
    {  
        $request->validate([
            'accountcode' => 'required|unique:users',
            'usercode' => 'required|unique:users',
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
           
        $data = $request->all();
        $check = $this->create($data);
         
        return redirect("home")->withSuccess('You have signed-in');
    }


    public function create(array $data)
    {
      return User::create([
        'accountcode' => $data['accountcode'],
        'usercode' => $data['usercode'],
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }    
    

    public function dashboard()
    {
        if(Auth::check()){
            return view('dashboard');
        }
  
        return redirect("login")->withSuccess('You are not allowed to access');
    }
    

    public function signOut() {
        Session::flush();
        Auth::logout();
  
        return Redirect('login');
    }
}