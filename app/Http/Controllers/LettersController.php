<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class LettersController extends Controller
{

    function list()
    {
      $reqs = Http::get('http://hayleypapers.fitzmuseum.cam.ac.uk/api/items');
      $reqi = json_decode($reqs->getBody(), true);

      return view('letters')
        ->with('reqi', $reqi);
         

    }

}
