

{{-- Control de errores / Este código es más práctico para no tener que repetir tantos errores como inputs haya en el formulario --}}

@if ($errors->any())
@foreach ($errors->all() as $error)
    <div class="alert alert-danger">
        {{ $error }}
    </div>
@endforeach
@endif