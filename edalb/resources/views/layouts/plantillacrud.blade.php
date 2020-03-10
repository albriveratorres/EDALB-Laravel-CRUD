<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/estilosedalb.css')}}">

	<style type="text/css">
		
		.cabecera{

			text-align: center;
			font-size: x-large;
			font-family: Tahoma, Geneva, sans-serif;
			margin-bottom: 100px
		}
		.contenido{
			width: 600px;
			margin: auto;

		}
		.pie{
			position: fixed;
			bottom: 0px;
			width: 100%;
			font-size: 0.7em;
			margin-bottom: 15px;
		}
	</style>

</head>
<body>
	<div class="menu">
		@include("layouts.navbarmenuprincipal")

		@yield("menu")

	</div>

	<div class="cabecera">
	
		@yield("cabecera")

	</div>

	<div class="contenido">

		@yield("contenido")

	</div>

	<div class="pie">

		@yield("pie")

		Crud en pruebas, Eddy Alberto Rivera Torres

	</div>
</body>
</html>