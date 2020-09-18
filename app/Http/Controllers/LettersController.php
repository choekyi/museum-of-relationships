<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class LettersController extends Controller
{

    function list()
    {

      return view('letters',['data'=>$data]);
    }

}
