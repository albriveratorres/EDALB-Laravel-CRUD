@extends("../layouts.plantillacrud")

@section("menu")
	
@endsection

@section("cabecera")

	Leer Registros

@endsection

@section("contenido")

	<table border="1">
		<td>Nombre Articulo</td>
		<td>Seccion</td>
		<td>Precio</td>
		<td>Fecha</td>
		<td>Pais de Origen</td>

		@foreach($productos as $producto)

			<tr>
				<td><a href="{{route('productos.edit', $producto->id)}}">{{$producto->NombreArticulo}} </a></td>

				<td> {{$producto->Seccion}} </td>

				<td>  {{$producto->Precio}} </td>

				<td>  {{$producto->Fecha}} </td>

				<td>  {{$producto->PaisOrigen}} </td>
			</tr>

		@endforeach

	</table>

@endsection

@section("pie")

@endsection