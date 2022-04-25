<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $table = "producto";
    protected $keyType = "string";
    protected $primaryKey = "cod";
    public $incrementing = false;
    public $timestamp = false;
    public $fillable = ['cod', 'nombre', 'nombre_corto', 'descripcion', 'PVP', 'familia'];

    public function ejemplo()
    {
        $producto = ["cod1", "nombre_1", "nombre corto", "descripción del producto", 125, "placas"];
        $p = new Producto();
        $p->save();
    }
}
