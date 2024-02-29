<?php

namespace App\Models;

use App\Http\Controllers\indexController;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 *
 * @property $id
 * @property $nombre
 * @property $descripcion
 * @property $categoria
 * @property $marca
 * @property $imagen
 * @property $precio
 * @property $stock
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Product extends Model
{
    
    static $rules = [
		'nombre' => 'required|string',
		'descripcion' => 'required|string',
		'categoria' => 'required|string',
		'marca' => 'required|string',
		'imagen' => 'required|string',
		'precio' => 'required',
		'stock' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','descripcion','categoria','marca','imagen','precio','stock'];

}
