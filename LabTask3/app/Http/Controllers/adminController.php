<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class adminController extends Controller
{
    //
    function _construct()
    {
        $this->middleware('validAdmin');
    }
    function registrationView()
    {
        return view('Pages.Aregistration');
    }
    function registrationData(Request $request)
    {
        $this->validate(
            $request,
            [
                'user'=>'required|min:5|string',
                'passWord'=>'required',
                'dob'=>'required|date',
                'email'=>'required|email|string',
            ],
            [
                'user.required'=>'The user field is required',
                'user.min'=>'The username must be 5 character',
                'passWord.required'=>'The password field is required',
                'email.required'=>'email field required',
                'email.email'=>'email format is wrong',
                'dob.required'=>'Date of birth required',
                'dob.date'=>'birthday format is wrong'
            ]
        );

        $admin=new Admin();
        $admin->username=$request->user;
        $admin->password=$request->passWord;
        $admin->email=$request->email;
        $admin->bday=$request->dob;
        $admin->save();
        return redirect()->route('Pages.login');
    }
    function enterAdash()
    {
        return view('admin.dashboard');
    }
    function viewProfile(Request $request)
    {
        $id=$request->id;
        $admin=Admin::where('id',$id)->first();
        return view('admin.profile')->with('admin',$admin);
    }
    function updateProfile(Request $request)
    {
        $id=$request->id;
       $admin=Admin::where('id',$id)->first();
        if($admin)
       {
        $admin->username = $request->user;
        $admin->password = $request->passWord;
        $admin->bday = $request->dob;
        $admin->email = $request->email;
        $admin->save();
        //return redirect()->route('employee.dash');
        return view('admin.profile')->with('admin',$admin);
      } 
    }
    function deleteProfile(Request $request)
    {
        $id=$request->id;
        $admin=Admin::where('id',$id)->first();
        $admin->delete();
        return redirect()->route('admin.list');
    }
    function editAdmin(Request $request)
    {
        $id=$request->id;
        
       $admin=Admin::Where('id',$id)->first();
       if($admin)
       {
       return view('admin.edit')->with('admin',$admin);
       }
    }

    function showadminlist()
    {
        $admin=Admin::all();
        return view('admin.list')->with('admin',$admin);
    }
}
