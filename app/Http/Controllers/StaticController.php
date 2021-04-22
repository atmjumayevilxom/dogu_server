<?php

namespace App\Http\Controllers;

use App\Models\Category;



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
    public function proect()
    {
        return view('proect');
    }
    public function servis()
    {
        return view('services');
    }
}
