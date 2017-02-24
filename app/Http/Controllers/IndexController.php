<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Feeds;

class IndexController extends Controller
{
    //
    public function index(){

	    $feed = Feeds::make('http://www.panoramacomerc.com.br/?feed=rss2');
    	return view('index')->with('feed', $feed);
    }
}
