<!DOCTYPE html>
<!--[if IEMobile 7 ]> <html dir="ltr" lang="en-GB"class="iem7"> <![endif]-->
<!--[if IE 8 ]> <html dir="ltr" lang="en-GB" class="ie8"> <![endif]-->
<!--[if IE 9]> <html dir="ltr" lang="en-GB" class="ie9"><![endif]-->
<!--[if gt IE 9]> <html dir="ltr" lang="en-GB" class="ie10"><![endif]-->
<html dir="ltr" lang="en-GB" class="no-js">
	<head>
		@section('headJS')
			@include ('partials.global.head')
			<link href="{{ url('css/layout.css') }}" rel="stylesheet" type="text/css">
		@show
	</head>
	<body>
    <div class="content-wrapper">
				<main>
					@yield('content')
				</main>
			</div>

		@section('bodyJS')
      @include ('partials.global.js')
		@show
	</body>
</html>
