<?php

namespace App\Http\Controllers;

use App\Car;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class CarsController extends Controller
{
    public function index(){

      $cars = Car::all();

    	return view('page.index', compact('cars'));
    }

    public function show(Car $car){

      return view('page.showcars', compact('car'));
    }
}
