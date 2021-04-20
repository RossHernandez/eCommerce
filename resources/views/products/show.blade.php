@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">

            @if(Auth::check() && $product->user_id == Auth::user()->id)
            
            
            <div class="row">
                <div class="col-1"></div>
                <div class="col-8">
                    <h1>{{ $product->title }}</h1>
                </div>
            <div class="col-3 text-right">

                <a class="btn btn-default btn-lg" href="{{ url('/products'.'/'.$product->id.'/edit')}}">
                    <i class="fa fa-pencil" aria-hidden="true"></i>
                </a>
                <a class="btn btn-default btn-lg">
                    @include('products.delete', ['product' => $product])
                </a>
            </div>
        </div> 
            @endif
            
            <hr>
            <div class="row">
                <div class="col-sm-6 col-xs-12"></div>
                <div class="col-sm-6 col-xs-12">
                    <p>
                        <label>Descripción:</label>
                        <p> {{ $product->description }} </p>
                    </p>
                    <p>
                        <a href="" class="btn btn-success">Agregar a carrito
                            <span class="fa fa-shopping-cart"></span>
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="floating" style="position: fixed; z-index:10;bottom: 4em; right: 4em;">
        <a class="btn btn-fab btn-primary" href="{{url('/products')}}">
            <i class="fa fa-chevron-left" aria-hidden="true"></i> Regresar 
        </a>
    </div>
@endsection