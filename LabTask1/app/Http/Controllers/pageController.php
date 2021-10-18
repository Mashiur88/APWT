<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
    function pagecheck()
    {
        return view('page.home');
    }
    function pagedata()
    {
        $view=10000;
        $name="my website";
        $data=array(
            'itemone'=>'Mobile',
            'itemtwo'=>'Laptop',
            'itemcount'=>55
        );
        //return view('page.service',compact('view','name'));
        return view('page.service')->with('data',$data);
    }
    function teamsPage()
    {
        return view('page.teams');
    }
    function pageInfo()
    {
        return view('page.about');
    }
    function pageContact()
    {
        return view('page.contact');
    }
    //
}
