<?php

namespace App\Http\Controllers;

use App\Car;
use App\Information;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class CarsController extends Controller
{
    public function index(){

      $cars = Car::all();

    	return view('page.index', compact('cars'));
    }

    public function show(Car $car){

      $car->load('informations.user');

      return view('page.showcars', compact('car'));
    }

    public function addCarInformation(Request $request, Car $car){

      // $information = new Information;
      // $information->body = $request->body;
      // $car->informations()->save($information);
      // return back();
      $this->validate($request,['body'=>'required']);
      $information = new Information($request->all());

      //$information->by(Auth::user());

      $car->addInformation($information, 1); //takes user id 1

      return back();

    }
}
