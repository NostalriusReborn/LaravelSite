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
        $registerErrors = $newAccount->register($request);


        if (count($registerErrors) !== 0)
        {
            return view('account.register', compact('registerErrors'));
        }

        $status = 1;
    	return view('account.register', compact('status'));
    }
}
