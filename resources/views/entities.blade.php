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
v-bind:entities ="{{json_encode($reqip)}}"
></entity-list>


@endsection
