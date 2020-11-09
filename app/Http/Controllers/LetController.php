<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class LetController extends Controller
{

  function view($id)
  {
    $reqs = Http::get('http://hayleypapers.fitzmuseum.cam.ac.uk/api/items/'.$id);
    $reqi = json_decode($reqs->getBody(), true);

    return view('let')
      ->with('reqi', $reqi);


  }
}
