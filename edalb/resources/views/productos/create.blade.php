@extends("../layouts.plantillacrud")

@section("menu")
	
@endsection

@section("cabecera")

	Insertar Registros

@endsection

@section("contenido")

	<form method="post" action="/productos">
		
		<table>
			<tr>
				<td>Nombre</td>
				<td>

					<input type="text" name="NombreArticulo">

					{{csrf_field()}}

				</td>
			</tr>
			<tr>
				<td>Seccion</td>
				<td>

					<input type="text" name="Seccion">

				</td>
			</tr>
			<tr>
				<td>Precio</td>
				<td>

					<input type="text" name="Precio">

				</td>
			</tr>
			<tr>
				<td>Fecha</td>
				<td>

					<input type="text" name="Fecha">

				</td>
			</tr>
			<tr>
				<td>Pais de Origen</td>
				<td>

					<input type="text" name="PaisOrigen">

				</td>
			</tr>

			<tr>
				<td>
					<input type="submit" name="enviar" value="Enviar">
				</td>
				<td>
					<input type="reset" name="Borrar" value="Borrar">
				</td>
			</tr>
		</table>
	</form>

@endsection

@section("pie")

@endsection