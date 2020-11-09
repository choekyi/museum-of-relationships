@extends('layouts.layout')

@section('title', 'Most Sacred Things : Correspondences')

@section('content')

<h1 class="serif">test</h1>

@foreach($reqit as $entity)
      <entity-card title="{{$entity['element_texts']['0']['text']}}" link-path="/entity/{{$entity['id']}}"></entity-card>
@endforeach


@foreach($reqip as $entity)
      <entity-card title="{{$entity['element_texts']['0']['text']}}" link-path="/entity/{{$entity['id']}}"></entity-card>
@endforeach

@endsection
