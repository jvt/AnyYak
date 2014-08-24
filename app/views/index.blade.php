@extends('layouts.default')

@section('title')
AnyYak
@stop

@section('content')
<div class="jumbotron" style="margin-top:50px;">
	<div class="container">
		<div class="row">
			<div class="col-md-4"></div>
			<h1 class="header text-center col-md-4 large">AnyYak</h1>
			<div class="col-md-4"></div>
			<p class="text-center col-md-12">Read YikYak's from anywhere with a zip code</p>
		</div>
		<div class="row" style="margin-top:20px;">
			<div class="col-md-2"></div>
			{{ Form::open(['route' => 'search.index', 'method' => 'POST', 'class' => 'col-md-8 form-inline']) }}
				<div class="form-group col-md-10">
					{{ Form::label('zip', 'Zip code', ['class' => 'sr-only']) }}
					{{ Form::text('zip', null, ['class' => 'form-control', 'placeholder' => 'Zip code', 'style' => 'width:100% !important;']) }}					
				</div>
				<div class="form-group col-md-2">
					{{ Form::submit('Get Yaks', ['class' => 'btn btn-primary']) }}
				</div>
			{{ Form::close() }}
			<div class="col-md-2"></div>
		</div>
	</div>
</div>
@stop