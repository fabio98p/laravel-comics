<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Laravel</title>

		<!-- Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

	</head>
	<body> 
		@include('layout.footer.footer')
	
		<main>
			@yield('main')
		</main>

	
		@include('layout.header.header')
	</body>
</html>