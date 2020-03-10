<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/estilosedalb.css')}}">


</head>
<body>


		@include("layouts.navbarmenuprincipal")

		@yield("menu")

		@include("layouts.headerprincipal")

		<div >@yield("headerPrincipal")</div>
		


		@include("layouts.contenido2")

		@yield("infocontenidopagina2")

		
	
		
		@yield("footer")

		Sitio en contruccion

</body>
</html>