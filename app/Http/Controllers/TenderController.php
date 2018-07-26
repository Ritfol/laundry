<?php

namespace App\Http\Controllers;

use App\Order;
use App\Tender;
use App\TenderOrder;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Validator;
use Illuminate\Support\Facades\Input;

class TenderController extends Controller
{
    public function index()
    {
        $tender = Auth::guard('tender')->user();

        return view('tender.dashboard')->with('tender' , $tender);
    }
    public function toRegister()
    {
        if(Auth::guard('tender')->check())
        {
            return redirect()->route('tender_dashboard');
        }

        return view('tender.register');
    }

    public function register(Request $request)
    {
        //dd($request->all());

        $validator = Validator::make($request->all() , [
            'name' => 'required|max:255',
            'phone_number' => 'required',
            'email' => 'required|email|unique:customers',
            'password' => 'required|min:3|confirmed',
            'service' => 'required',
            'city' => 'required|max:255',
            'location_description' => 'required',
        ]);

        if($validator->fails())
        {

            //return "false";

            return redirect()->back()->withErrors($validator)->withInput(Input::except('password'));

        }

        else
        {

            //return "true";

            $tender = new Tender();

            $tender->name = $request->name;
            $tender->phone_number = $request->phone_number;
            $tender->email = $request->email;
            $tender->password = Hash::make($request->password);
            $tender->service = $request->service;
            $tender->city = $request->city;
            $tender->location_description = $request->location_description;
            $tender->subscriptions = 0;

            $tender->save();

            return redirect()->route('tender_toLogin');
        }




    }

    public function toLogin()
    {
        if(Auth::guard('tender')->check())
        {
            return redirect()->route('tender_dashboard');
        }
        return view('tender.login');
    }

    public function login(Request $request)
    {

        $validator = Validator::make($request->all() , [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if ($validator->fails())
        {
            return redirect()->route('tender_toLogin')->withErrors($validator)->withInput(Input::except('password'));
        }

        else
        {

            if(Auth::guard('tender')->attempt(['email' => $request->email , 'password' => $request->password] ))
            {
                //dd(Auth::guard('customer')->user());

                return redirect()->route('tender_dashboard');
            }
            else
            {
                return redirect()->route('tender_toLogin')->withInput($request->only('email'));
            }

        }

    }

    public function toOrder()
    {
        return view('tender.order');
    }

    public function order(Request $request)
    {
        //dd(Carbon::parse($request->begin)->addMonth(1)->format('Y-m-d'));
        TenderOrder::create([
            'tender_id' => Auth::guard('tender')->user()->id,
            'order_description' => $request->order_description,
            'begin' => $request->begin,
            'end' => $request->end,
            'confirmed' => false
        ]);

        return redirect()->route('tender_orders');
    }

    public function orders(Request $request)
    {
        $orders = TenderOrder::where('tender_id' , Auth::guard('tender')->user()->id)->get();

        return view('tender.orders')->with('orders' , $orders);
    }

    public function logout(Request $request)
    {
        Auth::guard('tender')->logout();

        return redirect()->route('homepage');
    }
}
