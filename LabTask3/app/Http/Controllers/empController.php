<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class empController extends Controller
{
    //
    function registrationView()
    {
        return view('Pages.Eregistration');
    }
    function registrationData(Request $request)
    {
        $this->validate(
            $request,
            [
                'user'=>'required|min:5|string',
                'passWord'=>'required',
                'phone'=>'required|size:11|regex:/^([0-9\s\-\+\(\)]*)$/',
                'dob'=>'required|date',
                'email'=>'required|email|string',
                'gender'=>'required'

            ],
            [
                'user.required'=>'The user field is required',
                'user.min'=>'The username must be 5 character',
                'passWord.required'=>'The password field is required',
                'phone.required'=>'you must enter your phone number',
                'phone.regex'=>'error in phone number format',
                'dob.required'=>'Date of birth required',
                'dob.date'=>'birthday format is wrong',
                'email.required'=>'email field required',
                'email.email'=>'email format is wrong',
                'gender.required'=>'gender field is required'
            ]
        );

        $employee=new Employee();
        $employee->username=$request->user;
        $employee->password=$request->passWord;
        $employee->phoneno=$request->phone;
        $employee->bday=$request->dob;
        $employee->email=$request->email;
        $employee->gender=$request->gender;
        $employee->save();
        return redirect()->route('Pages.login');
    }
    function enterEdash()
    {
        return view('employee.dashboard');
    }
    function editEmp(Request $request)
    {
        $id=$request->id;
        
       $employees=Employee::Where('id',$id)->first();
       if($employees)
       {
       return view('employee.edit')->with('employee',$employees);
       }
    }
    function updateProfile(Request $request)
    {
       $id=$request->id;
       $employee=Employee::where('id',$id)->first();
        if($employee)
       {
        $employee->username = $request->user;
        $employee->password = $request->passWord;
        $employee->phoneno = $request->phone;
        $employee->bday = $request->dob;
        $employee->email = $request->email;
        $employee->gender = $request->gender;
        $employee->save();
        //return redirect()->route('employee.dash');
        return view('employee.profile')->with('employee',$employee);
      } 
           
    }
    function viewProfile(Request $request)
    {
        $id=$request->id;
        $employee=Employee::where('id',$id)->first();
        return view('employee.profile')->with('employee',$employee);

    }
    function deleteProfile(Request $request)
    {
        $id=$request->id;
        $employee=Employee::where('id',$id)->first();
        $employee->delete();
        return redirect()->route('employee.list');
    }
    function showemplist()
    {
        $employees=Employee::all();
        return view('employee.list')->with('employee',$employees);
    }
}
