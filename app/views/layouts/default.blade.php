<!DOCTYPE html>
<html lang="en">
	<head>

		<title>@yield('title')</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="UTF-8"/>
		@yield('meta')
		<link href="/components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" media="screen">
		<link href="/components/font-awesome/css/font-awesome.min.css" rel="stylesheet">
		<!--[if !IE 7]>
			<style type="text/css">
				.sect-m {display:table;height:100%}
			</style>
		<![endif]-->
		@yield('css')
		<script src="/components/jquery/dist/jquery.min.js"></script>
		<script src="/components/bootstrap/dist/js/bootstrap.min.js"></script>
		@yield('js')
	</head>
	<body>
		<div class="wrapper">
			@if ( Session::get('flash_message') )
			<div class="panel clearfix panel-danger" style="width: 100%">
				<div class="panel-heading clearfix" style="width: 100%">
					<p class="pull-left" style="padding-top:6px">{{ Session::get('flash_message') }}</p>
				</div>
			</div>
			@endif
			<div class="col-md-12 sect-c">
				@yield('content')
			</div>
		</div>
	</body>
</html>