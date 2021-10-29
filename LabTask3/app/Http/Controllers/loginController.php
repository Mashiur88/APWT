<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Admin;
class loginController extends Controller
{
    //
    function loginView()
    {
        return view('Pages.login');
    }
    function loginCheck(Request $request)
    {
        $this->validate(
            $request,
            [
                'user'=>'required|min:5',
                'passWord'=>'required'
            ],
            [
                'user.required'=>'The user field is required',
                'user.min'=>'The username must be 5 character',
                'passWord.required'=>'The password field is required'
            ]
        );
        $name=$request->user;
        $pass=$request->passWord;
        $employees=Employee::where('username',$name)
                         ->where('password',$pass)
                         ->first();
        $admins=Admin::where('username',$name)
                        ->where('password',$pass)
                        ->first();    
        if($employees)
        {
            $request->session()->put('id',$employees->id);
            return redirect()->route('employee.dash');
        }
        else if($admins)
        {
            $request->session()->put('id',$admins->id);
            return redirect()->route('admin.dash');
        }
        else
        {
            return "Your ID or Password is incorrect";
        }
        
    }
    function Logout()
    {
        session()->forget('id');
        return redirect()->route('Pages.login');
    }
    

}
