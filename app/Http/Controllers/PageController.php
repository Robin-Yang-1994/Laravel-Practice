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
    	$developer = ['Robin Yang', 'U1352883', 'BSc Computing'];

	return view('page.about', compact('developer'));
    }
}
