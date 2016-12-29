<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Information;

class InformationsController extends Controller
{
    public function editInformation(Information $information){

      return view('information.editInformation',compact('information'));
    }

    public function updateInformation(Request $request, Information $information){
      $information->update($request->all());

      return back();

    }
}
