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
        $status = 1;
    	return view('account.register', compact('status'));
    }
}
