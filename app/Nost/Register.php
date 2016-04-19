<?php

namespace App\Nost;

use Illuminate\Http\Request;
use App\RealmAccount;

class register 
{
	public function register(Request $request)
    {
    	if ($this->validateRequest($request))
    	{
    		if ($this->validatePassword($request->input('password')));
    	}
    	else 
    	{
    		$this->registerErrors[] = "Please fill in all the required fields.";
    	}
    	$this->validateRequest($request);
    	$this->validatePassword($request->input('password'));
    	// $this->checkUsername($request->input('username'));

    	if (count($this->registerErrors) !== 0)
    	{
            $registerErrors = $this->registerErrors;
    		return view('account.register', compact('registerErrors'));
    	}
    	$hashedPassword = $this->getPasswordHash($request->input('password'), $request->input('username'));
    	// save
        $this->checkUsername($request->input('username'));
    	$newAccount = new RealmAccount();
    	$newAccount->username = $request->input('username');
    	$newAccount->sha_pass_hash = $hashedPassword;
    	$newAccount->gmlevel = 0;
    	$newAccount->save();

    	return;
    }

    private function validateRequest(Request $request) 
    {
    	$username = $request->input('username');
    	$passwords = $request->input('passwords');
    	return isset($username) && isset($passwords[0]) && isset($passwords[1]);
    }

    private function validatePassword($passwords) 
    {
    	if (count($passwords) !== 2)
    	{
    		$this->registerErrors[] = "Please fill in all the required fields.";
    	}
    	if ($passwords[0] !== $passwords[1]) 
    	{
    		$this->registerErrors[] = "Your passwords did not match.";
    	}
    	return;
    }

    private function checkUsername($username)
    {
    	if (RealmAccount::where('username', $username)->get() == null)
    	{
    		$this->registerErrors[] = "The provided username is already taken.";
    	}
    	return;
    }

    private function getPasswordHash($passwords, $username)
    {
    	return sha1(strtoupper($username).":".strtoupper($this->password[0]));
    }
}
