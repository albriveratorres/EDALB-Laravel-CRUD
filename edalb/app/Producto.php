<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    //Array con los campos que queremos que se modifiquen

    protected $fillable=["NombreArticulo", "Seccion", "Precio", "Fecha", "PaisOrigen"];


}
