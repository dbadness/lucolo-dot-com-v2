<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    // show the home page
    public function showIndex()
    {
    	return view('pages.index');
    }
}
