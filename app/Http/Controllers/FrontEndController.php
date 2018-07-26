<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index()
    {
        return view('frontend.homepage');
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function services()
    {
        return view('frontend.services');
    }

    public function tenderServices()
    {
        return view('frontend.tenderServices');
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function signup()
    {
        return view('frontend.choose-register');
    }

    public function login()
    {
        return view('frontend.login');
    }
}
