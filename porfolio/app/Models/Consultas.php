<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use mysql_xdevapi\Table;

class Consultas extends Model
{
    /*use HasFactory;*/
    protected $table = 'consultas';
    protected $primaryKey = 'consulta_id';
    protected $fillable = ['consulta_id', 'name', 'email', 'descripcion'];

    public const VALIDAR_INGRESO_NOTICIAS = [
        'name' => 'required|min:2',
        'descripcion' => 'required|min:2|max:500',
        'email' => 'required|email',
    ];
    public const MENSAJE_VALIDAR_INGRESO_NOTICIAS = [
        'name.required'   => 'El Nombre no puede quedar vacio.',
        'name.min'   => 'El título de la noticia debe tener minimo :min caracteres.',
        'email.required'   => 'El email no puede quedar vacio.',
        'email.email'   => 'El email debe tener un formato de email valido ej: " wild@wild.com.ar ".',
        'descripcion.required'   => 'La consulta no deberia quedar vacia.',
        'descripcion.min'    => 'La consulta debe tener minimo 2 caracteres.',
        'descripcion.max'    => 'La consulta debe tener maximo 500 caracteres.',
    ];
}
