@extends('layouts.layout')

@section('title', 'A Museum of Relationships : Letter')

@section('content')
<h1>{{$reqi['element_texts']['3']['text']}}</h1>
<p>from X to X</p>
<p>A longer curatorial statement, potentially spread over multiple paragraphs. This text describes the letter as well as a curtorial interpretation.</p>
<p>A longer curatorial statement, potentially spread over multiple paragraphs. This text describes the letter as well as a curtorial interpretation.</p>

<letter-viewer
manuscriptPageImages='static/media/letter-page-1.b3295058.jpg,static/media/letter-page-2.59359898.jpg,static/media/letter-page-3.49d41969.jpg,static/media/letter-page-4.4ac90244.jpg'
transcriptPageComponents='TranscriptPage1,TranscriptPage2,TranscriptPage3,TranscriptPage4'

></letter-viewer>


@endsection
