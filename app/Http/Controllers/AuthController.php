<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request){
        // dd($request->all());   just for testing the result of this post method

        ///login  validation

        $request->validate(
            [
                'email'=>'required|email',
                'password'=>'required'
            ]
            );

            //login code

            if(\Auth::attempt($request->only('email','password')))
            {
                // check for role of the user and redirect them to the appropriate dashboard

                switch(\Auth::user()->role)
                {
                    case 'admin':
                        return redirect()->route('admin');
                    case 'scout':
                        return redirect()->route('scout');
                    case 'player':
                        return redirect()->route('player');
                
                    default:    
                        return redirect()->route('login');
                }

                // return redirect('home');
            }
            else
            {
                // authentication failed, redirect back with error message

                return redirect()->back()->with('error','Invalid email or password');
            }
    
            return redirect('/login')->withError('Login details not found');
    }


    public function register_view()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        // dd($request->all());  just for testing the result of this post method

        // register validation

        $request->validate(
            [
                'name'=>'required',
                'email'=>'required|unique:users|email',
                'role'=>'required',
                'password'=>'required|confirmed'
            ]
        );

        //save in users table

        User::create(

            [
            'name'=>$request->name,
            'email'=>$request->email,
            'role'=>$request->role,
            'password'=>\Hash::make($request->password)
            ]

        );

        if(\Auth::attempt($request->only('email','password')))
        {
            switch(\Auth::user()->role)
            {
                case 'admin':
                    return redirect()->route('admin');
                case 'scout':
                    return redirect()->route('scout');
                case 'player':
                    return redirect()->route('player');
            
                default:    
                    return redirect()->route('login');
            }
        }

        // return redirect('/register')->withError('Error');
        else
        {

            return redirect('/register')->with('error');
        }
    }
    

    public function ShowAdminDashboard(){
        return view('adminDash');
    }
    public function ShowScoutDashboard(){
        return view('scoutDash');
    }
    public function ShowPlayerDashboard(){
        return view('playerDash');
    }

    public function logout(){
        \Session::flush();
        \Auth::logout();

        return redirect('/');
    }

}
