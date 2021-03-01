@extends('layouts.layout')

@section('title', 'A Museum of Relationships : Correspondences')
@section('headstyle','wide')

@section('content')

<h1 class="serif">Hayley's Correspondences</h1>
<p>A paragraph explaining that this page contains three correspondences Hayley has had with different people. Explaining that each correspondence captures a different side of his personality. Ending with a sentence that welcomes visitors to dig in and explore.</p>
<correspondence-list
:correspondences='[{"names":["William Blake"],"backgroundIds":["blake"],"numberLetters":5,"curatorialStatement":"A brief curatorial statement, describing the correspondent(s), the relationship they had with Hayley and what this correspondence reveals about Hayleys character."},{"names":["William Blake","John Flaxman"],"backgroundIds":["blake","flaxman"],"numberLetters":13,"curatorialStatement":"A brief curatorial statement, describing the correspondent(s), the relationship they had with Hayley and what this correspondence reveals about Hayleys character."},{"names":["John Flaxman"],"backgroundIds":["flaxman"],"numberLetters":7,"curatorialStatement":"A brief curatorial statement, describing the correspondent(s), the relationship they had with Hayley and what this correspondence reveals about Hayleys character."}]'>
</correspondence-list>
@endsection
