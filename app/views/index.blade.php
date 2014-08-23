@extends('layouts.default')

@section('title')
AnyYak
@stop

@section('content')
<div class="header col-md-12">
	<div class="container">
		<div class="col-md-4"></div>
		<h1 class="header text-center col-md-4 large">AnyZip</h1>
		<div class="col-md-4"></div>
	</div>
</div>
<div class="search">
	<div class="container">
		<div class="col-md-2"></div>
		{{ Form::open(['route' => 'search.index', 'method' => 'POST', 'class' => 'col-md-8']) }}
			{{ Form::text('zip', null, ['class' => 'form-group w100', 'placeholder' => 'Zip code']) }}
			{{ Form::submit('Get Yaks', ['class' => 'btn btn-primary']) }}
		{{ Form::close() }}
		<div class="col-md-2"></div>
	</div>
</div>
@stop