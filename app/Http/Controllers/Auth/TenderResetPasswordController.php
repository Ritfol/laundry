<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Redirect;

class TenderResetPasswordController extends Controller
{
    use ResetsPasswords;

    protected $redirectTo = '/tender/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:tender');
    }

    protected function guard()
    {
        return Auth::guard('tender');
    }

    protected function broker()
    {
        return Password::broker('tender');
    }

    public function showResetForm(Request $request, $token = null)
    {
        //dd($token);
        return view('tender.reset')->with(
            ['token' => $token, 'email' => $request->email]
        );
    }
}
