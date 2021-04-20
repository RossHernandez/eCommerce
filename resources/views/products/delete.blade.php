{!! Form::open(['url' => '/products'.'/'.$product->id, 'method' => 'DELETE',
 'class' => 'alertEliminar']) !!}

    <!-- <input type="submit" value="Eliminar" style="padding: 0%; margin: 0%"> 
    <input type="hidden" value="Eliminar">-->

    
    <button class="btn btn-danger btn-xs" type="submit" 
        onclick="return confirm('Estás seguro que deseas eliminar el registro?');">

        <span class="fa fa-trash"></span>
    </button>


{!! Form::close() !!}

@section('js')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        $('.alertEliminar').submit(function (event){
            event.preventDefault();
            Swal.fire({
                title: '¿Seguro que desea eliminar?',
                text: "Atención, No podrá revertir los cambios",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Eliminar',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    this.submit();
                }
            })
        });
    </script>
@endsection