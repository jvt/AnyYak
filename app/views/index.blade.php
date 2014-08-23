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
	{{ Form::open(['route' => 'search.index', 'method' => 'POST']) }}
		{{ Form::text('zip', null, ['class' => 'form-group']) }}
	{{ Form::close() }}
</div>
@stop