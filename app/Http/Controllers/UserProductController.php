<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\UserProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserProductController extends Controller
{
    public function aniadirCarrito($idProducto)
    {
        if (UserProduct::where(['id_user' => Auth::user()->id, 'id_product' => $idProducto])->exists()) {
            $this->aniadirCantidadCarrito($idProducto);
        } else {
            $elementoCarrito = new UserProduct();
            $elementoCarrito->id_user = Auth::user()->id;
            $elementoCarrito->id_product = $idProducto;
            $elementoCarrito->cantidad = 1;
            $elementoCarrito->save();
        }
        return redirect("/");
    }

    public function aniadirCantidadCarrito($idProducto)
    {
        $elemento = UserProduct::where(['id_user' => Auth::user()->id, 'id_product' => $idProducto])->first();
        if ($elemento) {
            $elemento->cantidad++;
            $elemento->save();
        }
    }


}