@extends('layouts.layout')

@section('title', 'A Museum of Relationships : Letter')

@section('content')
<h1>{{$reqi['element_texts']['3']['text']}}</h1>
<p>from X to X</p>
<p>A longer curatorial statement, potentially spread over multiple paragraphs. This text describes the letter as well as a curtorial interpretation.</p>
<p>A longer curatorial statement, potentially spread over multiple paragraphs. This text describes the letter as well as a curtorial interpretation.</p>

<letter-viewer
transcript-component="{{$reqi['element_texts']['13']['text']}}"
></letter-viewer>


@endsection
