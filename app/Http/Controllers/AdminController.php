<?php


namespace App\Http\Controllers;

use App\Admin;
use App\CustomerOrder;
use App\Tender;
use App\Customer;
use App\TenderOrder;
use Carbon\Carbon;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class AdminController extends Controller
{
    public function index()
    {

        $admin = Auth::guard('admin')->user();;

        dd($admin);

        $activeCustomerOrders = CustomerOrder::where('confirmed' , true)->where('end' , '>=' , Carbon::now()->format('Y-m-d') )->get();
        $activeTenderOrders = TenderOrder::where('confirmed' , true)->where('end' , '>=' , Carbon::now()->format('Y-m-d') )->get();

        return view('admin.dashboard')->with('admin' , $admin)->with('customerOrders' , $activeCustomerOrders)->with('tenderOrders' , $activeTenderOrders);
    }

    public function toLogin()
    {
        if( Auth::guard('admin')->check())
        {
            return redirect()->route('dashboard');
        }

        return view('admin.login');
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
            if(Auth::guard('admin')->attempt(['email' => $request->email , 'password' => $request->password] ))
            {
                return redirect()->route('dashboard');
            }
            else
            {
                return redirect()->route('admin_toLogin')->withInput($request->only('email'));
            }

        }

    }

    public function logout()
    {
        Auth::guard('admin')->logout();

        return redirect()->route('admin_toLogin');
    }

    public function customerList()
    {
        $customers = Customer::all();

        return view('admin.customer_list')->with( 'customers' , $customers);
    }

    public function tenderList()
    {
        $tenders = Tender::all();

        return view('admin.tender_list')->with( 'tenders' , $tenders);
    }

    public function customerOrderList()
    {
        $orders = CustomerOrder::all();

        return view('admin.customer_order_list')->with('orders' , $orders);
    }

    public function tenderOrderList()
    {
        $orders = TenderOrder::all();

        return view('admin.tender_order_list')->with('orders' , $orders);
    }

    public function updateCustomerConfirmation(CustomerOrder $customerOrder)
    {
        if( $customerOrder->confirmed == false)
        {
            $customerOrder->confirmed = true;
            $customerOrder->save();
            return redirect()->back();
        }
            $customerOrder->confirmed = false;
            $customerOrder->save();
            return redirect()->back();


    }

    public function updateTenderConfirmation(TenderOrder $tenderOrder)
    {
        if( $tenderOrder->confirmed == false)
        {
            $tenderOrder->confirmed = true;
            $tenderOrder->save();
            return redirect()->back();
        }

        $tenderOrder->confirmed = false;
        $tenderOrder->save();
        return redirect()->back();


    }

    public function toAddAdmin()
    {
        return view('admin.addAdmin');
    }

    public function addAdmin(Request $request)
    {

        //dd($request->all());

        $validator = Validator::make($request->all() , [
            'name' => 'required|max:255',
            'phone_number' => 'required',
            'email' => 'required|email|unique:admins',
            'password' => 'required|min:3|confirmed',
            'role' => 'required'
        ]);

        if($validator->fails())
        {

            return redirect()->back()->withErrors($validator)->withInput(Input::except('password'));

        }

        else
        {
            Admin::create([
                'name' => $request->name,
                'phone_number' => $request->phone_number,
                'email' => $request->email,
                'role' => $request->role,
                'password' => Hash::make($request->password)
            ]);

            return redirect()->route('dashboard');
        }

    }
}
