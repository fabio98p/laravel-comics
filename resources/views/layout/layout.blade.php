<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Laravel</title>
		
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
		<!-- non so pertche funziona, dovrebbe essere il contrario, comunque trovero una soluzione migliore -->
		@if("home" == Route::currentRouteName())
		<link rel="stylesheet" href="../css/home.css">
		@else
		<link rel="stylesheet" href="../css/comic.css">
		@endif

	</head>
	<body> 
		@include('layout.header.header')
	
		<main>
			@yield('main')
		</main>

	
		@include('layout.footer.footer')
	</body>
</html>