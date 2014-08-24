@extends('layouts.default')

@section('title')
AnyYak / {{ $zipCode }}
@stop

@section('content')
<div class="jumbotron" style="margin-top:50px;">
	<div class="container">
		<div class="col-md-4"></div>
		<h1 class="header text-center col-md-4 large">AnyYak <small>{{ $zipCode }}</small></h1>
		<div class="col-md-4"></div>
	</div>
</div>
<div class="yak_block" style="margin-bottom:20px;">
	@foreach($yaks['messages'] as $index=>$yak)
		@if ($index === sizeof($yaks['messages'])-1)
	<div class="yak">
		@else
	<div class="yak border-bottom">
		@endif
		<h3 class="text-right likes" style="float:right;width:10%">{{ $yak->numberOfLikes }}</h3>
		<h3 class="text-left" style="width:90%">{{ $yak->message }}</h3>
		<p class="text-left date">Posted: {{ Date('F jS, Y g:i A', strtotime($yak->time)) }}</p>
	</div>
	@endforeach
</div>
@stop