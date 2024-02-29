@extends('layouts.app')

@section('template_title')
    {{ $product->name ?? __('Show') . " " . __('Product') }}
@endsection

@section('content')
    <section class="content container-md">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Product</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('products.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $product->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $product->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Categoria:</strong>
                            {{ $product->categoria }}
                        </div>
                        <div class="form-group">
                            <strong>Marca:</strong>
                            {{ $product->marca }}
                        </div>
                        <div class="form-group">
                            <strong>Imagen:</strong>
                            {{ $product->imagen }}
                        </div>
                        <div class="form-group">
                            <strong>Precio:</strong>
                            {{ $product->precio }}
                        </div>
                        <div class="form-group">
                            <strong>Stock:</strong>
                            {{ $product->stock }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
