@extends('layouts.app')

@section('content')
    <div class="big-padding text-center">
        <h1>Productos</h1>
    </div>

    <div class="container">
        <table class="table table-bordered">
            <thead>
                <tr style="background-color: rgb(159, 212, 214);">
                    <td>ID</td>
                    <td>Título</td>
                    <td>Descripción</td>
                    <td>Precio</td>
                    <td>Acciones</td>
                </tr>
            </thead>
            <tbody>
              @foreach( $products as $prod)
                <tr>
                    <td>{{ $prod->id }}</td>
                    <td>{{ $prod->title }}</td>
                    <td>{{ $prod->description }}</td>
                    <td>{{ $prod->pricing }}</td>
                    <td class="text-center">
                        <a class="btn btn-default btn-xs" href="{{ url('/products'.'/'.$prod->id.'/edit')}}">
                            <i class="fa fa-pencil" aria-hidden="true"></i>
                        </a>
                        <a class="btn btn-xs">
                            @include('products.delete', ['product' => $prod])
                        </a>
                    </td>
                </tr>
              @endforeach  
            </tbody>
        </table>
    </div>
    <div class="floating" style="position: fixed; z-index:10;bottom: 4em; right: 4em;">
        <a class="btn btn-fab btn-primary" href="{{url('/products/create')}}">
            <i class="fa fa-plus-square" aria-hidden="true"></i>
        </a>
    </div>
@endsection
