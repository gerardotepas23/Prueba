@extends('home')

@section('content')

<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <br>
        <h3>Lista de productos</h3>
        <br>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create">
            Nuevo
        </button>

            <br>
            <table class="table">
                <thead class="bg-dark text-white">
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nombre del producto</th>
                        <th scope="col">Descripción del producto</th>
                        <th scope="col">Precio Unitario</th>
                        <th scope="col">Stock</th>
                        <th scope="col">ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($productos as $producto)
                    <tr>
                        <td scope="row">{{ $producto->idproducto }}</td>
                        <td>{{ $producto->nombre }}</td>
                        <td>{{ $producto->descripcion }}</td>
                        <td>{{ $producto->preciounit }}</td>
                        <td>{{ $producto->cantidad }}</td>
                        <td>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#edit{{ $producto->idproducto }}">
                                Actualizar
                            </button>
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{ $producto->idproducto }}">
                                Eliminar
                            </button>
                        </td>
                    </tr>
                    @include('productos.info')
                    @endforeach
                </tbody>
            </table>
            <div>
                {!! $productos->links() !!}
            </div>
        </div>
    </div>
    <div class="col-md-2"></div>
</div>

@include('productos.create')

@endsection
