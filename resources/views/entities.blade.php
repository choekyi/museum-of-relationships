@extends('layouts.layout')

@section('title', 'A Museum of Relationships : Correspondences')

@section('headstyle','wide')

@section('content')
<h1>People, places, artworks...</h1>
<h3>...and other entities mentioned in Hayley's letters</h3>
<p>A longer curatorial statement, potentially spread over multiple paragraphs. This text describes the what kinds of entities are included here, how this forms an intricate web of relationships.
</p>
<p>It might also say something about the process by which these relationships have been extracted and analysed.</p>

<entity-list
:entities='[{"type":"Person","title":"Firstname Lastname","linkPath":"#","bgImageSrc":"static/media/flaxman.8d561154.jpg"},
{"type":"Person","title":"Firstname Lastname","linkPath":"#"},
{"type":"Person","title":"Firstname Lastname","linkPath":"#","bgImageSrc":"static/media/flaxman.8d561154.jpg"},
{"type":"Person","title":"Firstname Lastname","linkPath":"#"},{"type":"Place","title":"Place Name","linkPath":"#","bgImageSrc":"static/media/sussex-place.d23b8ddc.jpg"},{"type":"Place","title":"Place Name","linkPath":"#"},{"type":"Place","title":"Place Name","linkPath":"#","bgImageSrc":"static/media/sussex-place.d23b8ddc.jpg"},{"type":"Place","title":"Place Name","linkPath":"#"}]'>


</entity-list>






<div class="flex">
  <div class="ma2">
<h1 class="serif">People</h1>
@foreach($reqit as $entity)
      <entity-card
      title="{{$entity['element_texts']['1']['text']}} {{$entity['element_texts']['2']['text']}}"
      link-path="/entity/{{$entity['id']}}" type="person"></entity-card>
@endforeach
  </div>

  <div class="ma2">
<h1 class="serif">Places</h1>

@foreach($reqip as $entity)
      <entity-card title="{{$entity['element_texts']['0']['text']}}" link-path="/entity/{{$entity['id']}}" type="place"></entity-card>
@endforeach
  </div>
</div>

@endsection
