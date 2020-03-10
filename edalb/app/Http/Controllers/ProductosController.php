<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;

use App\Producto;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Dentro de esta funcion le dices que nos devuelva todos los productos

        $productos = Producto::All();

        return view("productos.index", compact("productos"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //funcion para mostrar vista crear
        return view("productos.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        /*-----------------funcion para crear un articulo en concreto y lo direcciona a la pagina productos

        -------------------------------------------------------------*/

        $producto = new Producto;

        $producto->NombreArticulo=$request->NombreArticulo;

        $producto->Seccion=$request->Seccion;

        $producto->Precio=$request->Precio;

        $producto->Fecha=$request->Fecha;

        $producto->PaisOrigen=$request->PaisOrigen;

        $producto->save();

        return redirect("/productos");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Se llama el metodo findOrFail y se le pasa el parametro id
        //se devuelve la vista productos.show

        $producto = Producto::findOrFail($id);

        return view("productos.show" , compact("producto"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Se llama el metodo findOrFail y se le pasa el parametro id

        $producto = Producto::findOrFail($id);

        return view("productos.edit" , compact("producto"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Se llama el metodo findOrFail y se le pasa el parametro id
        //utilizando el metodo update se actualiza con la llamada all por medio de un request
        //se redireciona al index

        /*----------------------si lo dejas asi da errortienes que realizar la instrucion
        ----------------------------------  protected $fillable en el modelo
        ---------------------------------------------------------------------------------*/
        
        $producto = Producto::findOrFail($id);

        $producto->update($request->all());

        return redirect("/productos");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        /*--------------------funcion para borrar un registro de la base de datos------------------
        --------------------------------------*/

        $producto = Producto::findOrFail($id);

        $producto->delete();

        return redirect("/productos");
    }
}
