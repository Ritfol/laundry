<?php

namespace App\Http\Controllers;

use App\Customer;
use App\CustomerOrder;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class CustomerController extends Controller
{
    public function __construct()
    {
//        $this->middleware('auth:customer');
    }

    public function index()
    {

        $customer = Auth::guard('customer')->user();

        //dd($customer);

        return view('customer.dashboard')->with('customer' , $customer);
    }
    public function toRegister()
    {
        if( Auth::guard('customer')->check())
        {
            return redirect()->route('customer_dashboard');
        }

        return view('customer.register');
    }

    public function register(Request $request)
    {
        //dd($request->all());

        $validator = Validator::make($request->all() , [
            'name' => 'required|max:255',
            'phone_number' => 'required',
            'email' => 'required|email|unique:customers',
            'password' => 'required|min:3|confirmed',
            'gender' => 'required',
            'city' => 'required|max:255',
            'location_description' => 'required',
        ]);

        if($validator->fails())
        {

            return redirect()->back()->withErrors($validator)->withInput(Input::except('password'));

        }

        else
        {

            $customer = new Customer();

            $customer->name = $request->name;
            $customer->phone_number = $request->phone_number;
            $customer->email = $request->email;
            $customer->password = Hash::make($request->password);
            $customer->gender = $request->gender;
            $customer->city = $request->city;
            $customer->location_description = $request->location_description;
            $customer->subscriptions = 0;

            $customer->save();

            return redirect()->route('customer_toLogin');
        }




    }

    public function toLogin()
    {
        if( Auth::guard('customer')->check())
        {
            return redirect()->route('customer_dashboard');
        }

        return view('customer.login');
    }

    public function login(Request $request)
    {

        $validator = Validator::make($request->all() , [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if ($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput(Input::except('password'));
        }

        else
        {

            if(Auth::guard('customer')->attempt(['email' => $request->email , 'password' => $request->password] ))
            {
                return redirect()->route('customer_dashboard');
            }
            else
            {
                return redirect()->route('customer_toLogin')->withInput($request->only('email'));
            }

        }

    }

    public function toOrder()
    {
        return view('customer.order');
    }

    public function order(Request $request)
    {
        //dd(Carbon::parse($request->begin)->addMonth(1)->format('Y-m-d'));
        CustomerOrder::create([
           'customer_id' => Auth::guard('customer')->user()->id,
            'package' => $request->package,
            'begin' => $request->begin,
            'end' => Carbon::parse($request->begin)->addMonth(1)->format('Y-m-d'),
            'confirmed' => false
        ]);

        return redirect()->route('customer_orders');
    }

    public function orders()
    {

        $orders = CustomerOrder::where('customer_id' , Auth::guard('customer')->user()->id)->get();

        return view('customer.orders')->with('orders' , $orders);

    }

    public function logout()
    {
        Auth::guard('customer')->logout();

        return redirect()->route('customer_toLogin');
    }

}
