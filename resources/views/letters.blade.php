@extends('layouts.layout')

@section('title', 'Most Sacred Things : Correspondences')

@section('content')

<h1 class="serif">Hayley's Correspondences</h1>
<p>A paragraph explaining that this page contains three correspondences Hayley has had with different people. Explaining that each correspondence captures a different side of his personality. Ending with a sentence that welcomes visitors to dig in and explore.</p>



@foreach($reqi as $letter)
      <letter-preview-card title="{{$letter['element_texts']['0']['text']}}"></letter-preview-card>
@endforeach

@endsection
