<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Pelicula extends Model
{

    /**
     * Tabla relacionada con el modelo.
     *
     * @var string
     */
    protected $table = 'peliculas';

    /**
     * Reglas de validación para el recurso crear.
     *
     * @var array
     */
    public static $rules = [
        'nombre'           => 'required|string|max:255',
        'codigo'           => 'required|string|max:5',
        'descripcion'      => 'required|string|max:255',
        'genero'           => 'required|string|max:50',
    ];

    /**
     * Reglas de validación para el recurso actualizar.
     * 
     * @var array
     */
    public static $rulesUpdate = 
    [
        'nombre'           => 'required|string|max:255',
        'codigo'           => 'required|string|max:5',
        'descripcion'      => 'required|string|max:255',
        'genero'           => 'required|string|max:50',
    ];

    /**
     * Los atributos que son asignables en masa.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nombre',
        'codigo',
        'descripcion',
        'genero',
    ];

    /**
     * Los atributos que deberían estar visibles.
     * 
     * @var array
     */
    protected $visible = [
        'id',
        'nombre',
        'codigo',
        'descripcion',
        'genero'
    ];

    /**
     * Mensajes personalizados conforme a las reglas de validación.
     * 
     * @var array
     */
    public static $messagesValidators = [
        'nombre.required'       => 'El nombre es requerido.',
        'codigo.required'       => 'El código es requerido.',
        'descripcion.required'  => 'La descripción es requerida.',
        'genero.required'       => 'El género es requerido.',
    ];

}
