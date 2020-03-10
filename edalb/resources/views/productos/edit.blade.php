@extends("../layouts.plantillacrud")

@section("menu")
	
@endsection

@section("cabecera")

	Editar Registros

@endsection

@section("contenido")

	<form method="post" action="/productos/{{$producto->id}}">
		
		<table>
			<tr>
				<td>Nombre</td>
				<td>

					<input type="text" name="NombreArticulo" value="{{$producto->NombreArticulo}}">

					{{csrf_field()}}

					<input type="hidden" name="_method" value="PUT">

				</td>
			</tr>
			<tr>
				<td>Seccion</td>
				<td>

					<input type="text" name="Seccion" value="{{$producto->Seccion}}">

				</td>
			</tr>
			<tr>
				<td>Precio</td>
				<td>

					<input type="text" name="Precio" value="{{$producto->Precio}}">

				</td>
			</tr>
			<tr>
				<td>Fecha</td>
				<td>

					<input type="text" name="Fecha" value="{{$producto->Fecha}}">

				</td>
			</tr>
			<tr>
				<td>Pais de Origen</td>
				<td>

					<input type="text" name="PaisOrigen" value="{{$producto->PaisOrigen}}">

				</td>
			</tr>

			<tr>
				<td>
					<input type="submit" name="enviar" value="Actualizar Registros">
				</td>
				<td>
					<input type="reset" name="Borrar" value="Limpiar Campos">
				</td>
			</tr>
		</table>
	</form>

	<form method="post" action="/productos/{{$producto->id}}">

		{{csrf_field()}}

		<input type="hidden" name="_method" value="DELETE">

		<input type="submit" value="Eliminar Registro" name="">

	</form>

@endsection

@section("pie")

@endsection