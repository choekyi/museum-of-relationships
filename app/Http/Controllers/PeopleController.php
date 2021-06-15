<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Arr;


class PeopleController extends Controller
{

    function people()
    {
      $reqsp = Http::get('http://hayleypapers.fitzmuseum.cam.ac.uk/api/items');
      $reqips = json_decode($reqsp->getBody(), true);


      $texts = array();



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
          $arr = Arr::prepend($arr, $path, 'linkPath');
          $arr = Arr::prepend($arr, $id, 'id');
        }

        array_push($texts,$arr);


      }
}

      return view('entities')
        ->with('reqip', $texts)
  ;





    }



    function entity($id)
    {
      $reqs = Http::get('http://hayleypapers.fitzmuseum.cam.ac.uk/api/items/'.$id);
      $reqit = json_decode($reqs->getBody(), true);
      $type = $reqit['item_type']['name'];
      $texts2 = array();


      $ets = $reqit['element_texts'];
        $arra = array();

        foreach ($ets as $et) {
          $et = Arr::dot($et);
          $arra = Arr::prepend($arra, $et['text'], str_replace(" ", "",strtolower($et['element.name'])));
        }

        array_push($texts2,$arra);

      return view('entity')
        ->with('ent', $texts2);

  ;


    }


}
