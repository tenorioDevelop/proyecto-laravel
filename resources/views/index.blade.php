<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Rubik's palace - tienda</title>
</head>
<body>
    @extends('layouts.app')
    @section('content')
    <div class="container-md">
        <table class="table">
            <thead>
                <td>Imagen</td>
                <td>Nombre</td>
                <td>Descripcion</td>
                <td>Categoria</td>
                <td>Marca</td>
                <td>Precio</td>
                @if(true)
                <td>stock</td>
                @endif
                <td>Acciones</td>
            </thead>
                <tbody>
                    @foreach ($productos as $producto)
                    <tr class="tr">
                        <td><a target="_blank" href="/storage/{{$producto->imagen}}"><img src="{{asset('storage/' . $producto->imagen)}}" /></a></td>
                        <td>{{$producto->nombre}}</td>
                        <td>{{$producto->descripcion}}</td>
                        <td>{{$producto->categoria}}</td>
                        <td>{{$producto->marca}}</td>
                        <td>{{$producto->precio}}€</td>
                        <td><a href="/comprar/{{$producto->id}}" class="btn btn-success">Aniadir</a></td>
                    </tr>
                    @endforeach
                </tbody>
        </table>
    </div>
    @endsection
</body>
</html>