<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Laravel</title>
		<link rel="stylesheet" href="./css/home.css">

		<!-- Fonts -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
		<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

	</head>
	<body> 
		@include('layout.header.header')
	
		<main>
			@yield('main')
		</main>

	
		@include('layout.footer.footer')
	</body>
</html>