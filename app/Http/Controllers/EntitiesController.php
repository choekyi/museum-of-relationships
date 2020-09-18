<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EntitiesController extends Controller
{
  function index()
  {
    return view('entities',['data'=>$data]);

  }

  function view() {

    return view('entity',['data'=>$data]);

  }
}
