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
                    @if (isset(Auth::user()->name))
                        @if (Auth::user()->name == 'admin')
                            <td>stock</td>
                        @endif
                    @endif
                    <td>Acciones</td>
                </thead>
                <tbody>
                    @foreach ($productos as $producto)
                        <tr class="tr">
                            <td><a target="_blank" href="/storage/{{ $producto->imagen }}"><img
                                        src="{{ asset('storage/' . $producto->imagen) }}" /></a></td>
                            <td>{{ $producto->nombre }}</td>
                            <td>{{ $producto->descripcion }}</td>
                            <td>{{ $producto->categoria }}</td>
                            <td>{{ $producto->marca }}</td>
                            <td>{{ $producto->precio }}€</td>
                            @if (isset(Auth::user()->name))
                                @if (Auth::user()->name == 'admin')
                                    <td>{{ $producto->stock }}</td>
                                @endif
                            @endif
                            @if ($producto->stock == 0)
                            <td>SIN STOCK</td>
                            @else
                            <td><a href="/comprar/{{ $producto->id }}" class="btn btn-success">Aniadir</a></td>
                            @endif
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endsection
</body>

</html>
