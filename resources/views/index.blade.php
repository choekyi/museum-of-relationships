@extends('layouts.layout')

@section('headstyle','wide')

@section('title', 'A Museum of Relationships')

@section('content')
<h1 class="serif">A purposeful call to action as a title</h1>
<p>A paragraph explaining that WH wrote letters to different people and that these letters reference different kinds of entities. The paragraphs welcomes visitors to explore via one of the two routes offered below.</P>
  <div class="flex">

  <c-t-a-card
    title="Correspondences"
    content="A sentence explaining what’s interesting about correspondences."
    button-text="Start Reading"
    button-link="/correspondences"></c-t-a-card>

    <c-t-a-card
      title="People, places & more  "
      content="A sentence explaining what’s interesting about entities in William Hayley’s letters."
      button-text="Explore entities"
      button-link="/entities"></c-t-a-card>
</div>
@endsection
