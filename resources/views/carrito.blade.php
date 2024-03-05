<div>
    @extends('layouts.app')
    @section('content')
    <div class="container-md mt-3">
        <table class="table">
            <tr>
                <td>Nombre</td>
                <td>Imagen</td>
                <td>Precio</td>
                <td>Cantidad</td>
                <td>Accion</td>
            </tr>
            @foreach ($elementosCarrito as $elemento)
            <tr>
                <td>{{$elemento['nombre']}}</td>
                <td><img src="{{ asset('storage/' . $elemento['imagen']) }}" /></td>
                <td>{{$elemento['precio']}}</td>
                <td>{{$elemento['cantidad']}}</td>
                <td><a class="btn btn-success" href="/aumentarCantidad/{{$elemento['id']}}">Aniadir cantidad</a> <a class="btn btn-info" href="/reducirCantidad/{{$elemento['id']}}">Reducir cantidad</a></td>
            </tr>
            @endforeach
        </table>
        <a class="btn btn-primary w-100" href="/vaciar-cesta">Comprar todo</a>
    </div>
    @endsection
</div>