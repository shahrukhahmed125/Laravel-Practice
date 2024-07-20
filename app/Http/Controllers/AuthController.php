<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

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
                return redirect('home');
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
                'password'=>'required|confirmed'
            ]
        );

        //save in users table

        User::create(

            [
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>\Hash::make($request->password)
            ]

        );

        if(\Auth::attempt($request->only('email','password')))
        {
            return redirect('home');
        }

        return redirect('/register')->withError('Error');
    }

    public function home(){
        return view('home');
    }

    public function logout(){
        \Session::flush();
        \Auth::logout();

        return redirect('/');
    }
}

