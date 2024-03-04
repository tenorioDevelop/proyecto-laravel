<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProduct extends Model
{
    protected $table = "userproducts";
    public $timestamps = false;
    use HasFactory;

    public $incrementing = false; // Indica que no se utilizará una clave primaria incrementada automáticamente
    
    protected $primaryKey = ['id_user', 'id_product']; // Especifica las columnas que forman la clave primaria
        
    protected $fillable = ['id_user', 'id_product', 'cantidad']; // Asegúrate de incluir todos los campos que puedes asignar en masa

    use HasFactory;
}
