<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

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
        return view('welcome')->with('user',$request->user);
    }
    function registrationView()
    {
        return view('Pages.registration');
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
    }
    function showContact()
    {
        return view('Pages.contact');
    }
    function contactView(Request $request)
    {
        $this->validate(
            $request,
            [
                'address'=>'required|max:100',
                'fb'=>'required',
                'linkdln'=>'required'
            ],
            [
                'address.required'=>'you must enter your address',
                'fb.required'=>'you must enter your fb link',
                'linkdln.required'=>'you must enter your linkdln address'
            ]
        );
    }
}
