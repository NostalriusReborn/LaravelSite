<?php

namespace App\Nost;

use Illuminate\Http\Request;
use App\RealmAccount;

class register 
{
    private $registerErrors = [];

    public function register(Request $request)
    {
    	if (!$this->validateRequest($request))
    	{
            $this->registerErrors[] = "Please fill in all the required fields.";
    	}

    	$this->validatePassword($request->input('password'));
    	$this->checkUsername($request->input('username'));

    	if (count($this->registerErrors) !== 0)
    	{
            return $this->registerErrors;
    	}

    	$hashedPassword = $this->getPasswordHash($request->input('username'), $request->input('password')[0]);
    	// save

    	$newAccount = new RealmAccount();
    	$newAccount->username = strtoupper($request->input('username'));
    	$newAccount->sha_pass_hash = $hashedPassword;
    	$newAccount->gmlevel = 0;
    	$newAccount->save();

        return [];
    }

    private function validateRequest(Request $request) 
    {
    	$username = $request->input('username');
    	$passwords = $request->input('password');
    	return isset($username) && count($passwords) === 2;
    }

    private function validatePassword($passwords) 
    {
    	if (count($passwords) !== 2)
    	{
    		$this->registerErrors[] = "Please confirm the entered password.";
    	}

    	if ($passwords[0] !== $passwords[1]) 
    	{
    		$this->registerErrors[] = "Your passwords did not match.";
    	}
    }

    private function checkUsername($username)
    {
    	if (count(RealmAccount::where('username', $username)->get()) !== 0)
    	{
    		$this->registerErrors[] = "The provided username is already taken.";
    	}
    }

    private function getPasswordHash($username, $password)
    {
    	return sha1(strtoupper($username).":".strtoupper($password));
    }
}
