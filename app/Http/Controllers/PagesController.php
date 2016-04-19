<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function home()
    {
    	$files = ['img/play.svg','img/forum.svg','img/features.svg'];

    	foreach ($files as $index => $file) 
    	{
    		$doc = new \DOMDocument();
    		$doc->load($file);
    		$svg[] = $doc->getElementsByTagName('svg');
    	}
    	return view('main.home', compact('svg'));
    }

    public function connectionGuide() 
    {
        return view('main.connectionGuide');
    }
}
