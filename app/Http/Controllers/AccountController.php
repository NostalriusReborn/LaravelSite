<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nost\Register;
use App\Http\Requests;
use Session;

class AccountController extends Controller
{
    public function register(Request $request)
    {
    	return view('account.register');
    }
    public function saveRegisteredAccount(Request $request) 
    {
    	$newAccount = new Register();
    	$newAccount->register($request);
    	Session::flash('message', 'Account Created!');
    	return view('account.register');
    }
}
