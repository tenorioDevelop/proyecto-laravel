<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\UserProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;

class UserProductController extends Controller
{

    public function mostrarCarrito()
    {
        $registrosUserProduct = UserProduct::where(['id_user' => Auth::user()->id])->get();
        $elementosCarrito = [];
        for ($i = 0; $i < count($registrosUserProduct); $i++) {
            $registroProduct = Product::where(['id' => $registrosUserProduct[$i]->id_product])->first();
            $elementosCarrito[] = [
                "id" => $registroProduct->id,
                "nombre" => $registroProduct->nombre,
                "imagen" => $registroProduct->imagen,
                "precio" => $registroProduct->precio,
                "cantidad" => $registrosUserProduct[$i]->cantidad
            ];
        }
        return view("carrito", compact("elementosCarrito"));
    }

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
            Product::where([
                'id' => $idProducto
            ])->update(['stock' => DB::raw('stock - 1')]);
        }
        return redirect("/");
    }

    public function aniadirCantidadCarrito($idProducto)
    {

        /* Comprobar que el producto tiene stock suficiente */

        if (Product::where(['id' => $idProducto])->first()->stock > 0) {
            UserProduct::where([
                'id_user' => Auth::user()->id,
                'id_product' => $idProducto
            ])->update(['cantidad' => DB::raw('cantidad + 1')]);

            Product::where([
                'id' => $idProducto
            ])->update(['stock' => DB::raw('stock - 1')]);
        }
    }

    public function reducirCantidadCarrito($idProducto)
    {

        /* Comprobar que el elemento del carrito no tenga valor negativo */
        if (UserProduct::where(['id_product' => $idProducto, 'id_user' => Auth::user()->id])->first()->cantidad == 1) {
            UserProduct::where(['id_product' => $idProducto, 'id_user' => Auth::user()->id])->delete();
            Product::where([
                'id' => $idProducto
            ])->update(['stock' => DB::raw('stock + 1')]);
        } else {
            UserProduct::where([
                'id_user' => Auth::user()->id,
                'id_product' => $idProducto
            ])->update(['cantidad' => DB::raw('cantidad - 1')]);

            Product::where([
                'id' => $idProducto
            ])->update(['stock' => DB::raw('stock + 1')]);
        }
        return redirect("/carrito");
    }

    public function vaciarCesta()
    {
        $id = Auth::user()->id;
        $cantidad = UserProduct::where(['id_user' => $id])->first()->cantidad;
        $idProducto = UserProduct::where(['id_user' => $id])->first()->idProducto;
        UserProduct::where(['id_user' => $id])->delete();
        UserProduct::where([
            'id_user' => Auth::user()->id,
            'id_product' => $idProducto
        ])->update(['cantidad' => DB::raw('cantidad - ' . $cantidad)]);
        return redirect("/");
    }

}