<?php

namespace App\Http\Controllers;

use App\Express;
use App\Mail\OrderExpress;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

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

        return view('frontend.choose-login');
    }

    public function toExpress()
    {
        return view('frontend.express');
    }

    public function express(Request $request , Mailer $mailer)
    {
        //dd($request->all());

        $mailer->to($request->email)->send(new OrderExpress());

        return redirect()->route('express_confirm');
    }

    public function confirmExpress()
    {
        //$email = Session::get('email');
        return view('frontend.confirmation');
    }

    public function toConfirmation()
    {
        return view('customer.confirmation');
    }


}
