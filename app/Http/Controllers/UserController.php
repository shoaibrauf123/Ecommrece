<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class UserController extends Controller
{
    
    public function index(){
        return view("auth.login");
    }

    public function register(){
        return view("auth.register");
    }
    public function register_user(Request $req){
        //dd($req->all());

        $req->validate([
            "username"=> "required",
            "email"=> "required|email|unique:users",
            "password"=> "required|min:6|max:15",
        ]);

        $result = User::create([
            "username" => $req->username,
            "email" => $req->email,
            "password" => Hash::make($req->password),
        ]);
        
        if($result){
            return redirect(route('login'))->with('success','Add New Record.');
        }else{
            return back()->with("error","No Record");
        }
    }

    public function user_login(Request $req){
       
        $req->validate([
            "email"=> "required",
            "password"=> "required|min:6|max:15",
        ]);

        $credentials = $req->only('email', 'password');

        if(Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
            ->withSuccess('Successfully Login');
        }
    }
    public function logout(){
        Auth::logout();
        return redirect("/");


    }
    public function dashboard(){
            $user = Auth::user();
            return view("project.dashboard",[
            "user" => $user,
        ]);
    }
}
