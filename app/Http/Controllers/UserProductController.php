<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\UserProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserProductController extends Controller
{
    public function aniadirCarrito($id){
        $elementoCarrito = new UserProduct();
        $elementoCarrito->id_product = $id;
        $elementoCarrito->id_user = Auth::user()->id;
        $elementoCarrito->save();   
        return redirect("/");
    }
}
