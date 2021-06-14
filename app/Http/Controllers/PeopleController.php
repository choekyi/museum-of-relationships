<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Arr;


class PeopleController extends Controller
{

    function people()
    {
      $reqs = Http::get('http://hayleypapers.fitzmuseum.cam.ac.uk/api/items?item_type=12');
      $reqits = json_decode($reqs->getBody(), true);
      $reqsp = Http::get('http://hayleypapers.fitzmuseum.cam.ac.uk/api/items');
      $reqips = json_decode($reqsp->getBody(), true);


      $texts = array();
      $texts2 = array();



      foreach ($reqips as $reqip) {

            if (isset($reqip['item_type']['name']) && (($reqip['item_type']['name'] == "Place") OR ($reqip['item_type']['name'] == "Person"))) {
              $type = $reqip['item_type']['name'];
              $id = $reqip['id'];
              $path = "entity/".$reqip['id'];

          $ets = $reqip['element_texts'];
            $arr = array();

        foreach ($ets as $et) {
          $et = Arr::dot($et);
          $arr = Arr::prepend($arr, $et['text'], str_replace(" ", "",strtolower($et['element.name'])));
          $arr = Arr::prepend($arr, $type, 'type');
          $arr = Arr::prepend($arr, $path, 'path');
          $arr = Arr::prepend($arr, $id, 'id');
        }

        array_push($texts,$arr);


      }
}
/*
      foreach ($reqits as $reqit) {

        $id = $reqit['id'];
        $url = $reqit['url'];

        $ets = $reqit['element_texts'];
            $arr = array();

        foreach ($ets as $et) {
          $et = Arr::dot($et);
          $arr = Arr::prepend($arr, $et['text'], $et['element.name']);
          $arr = Arr::prepend($arr, $url, 'URL');
          $arr = Arr::prepend($arr, $id, 'ID');


        }
        array_push($texts2,$arr);
      }

      usort($texts2, function($a, $b) {
          return $a['Title'] <=> $b['Title'];
      });

      usort($texts, function($a, $b) {
          return $a['Title'] <=> $b['Title'];
      });

*/
      return view('entities')
        ->with('reqip', $texts)
  ;



    }

    function entity($id)
    {
      $reqs = Http::get('http://hayleypapers.fitzmuseum.cam.ac.uk/api/items/'.$id);
      $reqit = json_decode($reqs->getBody(), true);
      return view('entity')
        ->with('reqit', $reqit);
    }


}
