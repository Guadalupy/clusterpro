<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Boletine
 *
 * @property $id
 * @property $nombre
 * @property $descripcion
 * @property $fecha
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Boletine extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'descripcion' => 'required',
		'fecha' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','descripcion','fecha'];



}
