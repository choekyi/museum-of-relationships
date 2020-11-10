<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PeopleController extends Controller
{

    function people()
    {
      $reqs = Http::get('http://hayleypapers.fitzmuseum.cam.ac.uk/api/items?item_type=12');
      $reqit = json_decode($reqs->getBody(), true);
      $reqsp = Http::get('http://hayleypapers.fitzmuseum.cam.ac.uk/api/items?item_type=22');
      $reqip = json_decode($reqsp->getBody(), true);
      return view('entities')
        ->with('reqit', $reqit)
        ->with('reqip', $reqip);
    }

}
