<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function home()
    {
    	$people = ['Robin', 'Kevin', 'Gary'];

	return view('page.people', compact('people'));

    }

    public function about()
    {
    	$people = ['Robin', 'Kevin', 'Gary'];

	return view('page.about', compact('people'));
    }
}
