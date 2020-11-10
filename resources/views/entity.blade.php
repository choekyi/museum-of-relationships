@extends('layouts.layout')

@section('title', 'A Museum of Relationships : ')

@section('headstyle','wide')

@section('content')
<entity-header
type='person'
title='{{$reqit["element_texts"]["1"]["text"]}} {{$reqit["element_texts"]["2"]["text"]}}'>
</entity-header>

@endsection
