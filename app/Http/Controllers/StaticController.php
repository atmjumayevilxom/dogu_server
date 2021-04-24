<?php

namespace App\Http\Controllers;

class StaticController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function company()
    {
        return view('company');
    }

    public function project()
    {
        return view('project');
    }

    public function service()
    {
        return view('service');
    }
}
