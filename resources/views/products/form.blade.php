{!! Form::open(['url' => $url, 'method' => $method]) !!}
    <div class="form-group">
        {{ Form::text('title', $product->title, ['class'=>'form-control', 'placeholder'=>'Título']) }}
    </div>
    <div class="form-group">
        {{ Form::number('pricing', $product->pricing, ['class'=>'form-control', 'placeholder'=>'Precio']) }}
    </div>
    <div class="form-group">
        {{ Form::textarea('description', $product->description, ['class'=>'form-control', 'placeholder'=>'Descripción']) }}
    </div>
    <div class="form-group text-right">
        <a class="btn btn-small btn-danger" href="{{url('/products')}}"> Regresar </a>

        <input type="submit" value="Guardar" class="btn btn-small btn-success"> 
    </div>
{!! Form::close() !!}