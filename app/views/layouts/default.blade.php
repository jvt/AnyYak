<!DOCTYPE html>
<html lang="en">
	<head>

		<title>@yield('title')</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="UTF-8"/>
		@yield('meta')
		<link href="/components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" media="screen">
		<link href="/components/font-awesome/css/font-awesome.min.css" rel="stylesheet">
		<link href="/css/yak.css" rel="stylesheet">
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
		<div class="page_wrap">
			@if ( Session::get('error_message') )
			<div class="panel clearfix panel-danger" style="width: 100%">
				<div class="panel-heading clearfix" style="width: 100%">
					<p class="pull-left" style="padding-top:6px">{{ Session::get('error_message') }}</p>
				</div>
			</div>
			@endif
			<div class="container">
				@yield('content')
			</div>
		</div>
		<footer>
			<div class="container">
				<p class="made_by text-center" style="line-height:60px;margin:0px;">Made on a <span class="fa fa-plane"></span> out to San Francisco by <a href="https://joetorraca.com" title="Joe Torraca">Joe Torraca</a>.</p>
			</div>
		</footer>
	</body>
</html>