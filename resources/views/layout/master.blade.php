<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

	<head>
		@include('layout.header')
	</head>

	<body data-spy="scroll" data-target="#header-navbar" data-offset="51">
		@include('layout.navbar')
		@yield('content')
		@include('layout.footer')
	</body>

</html>