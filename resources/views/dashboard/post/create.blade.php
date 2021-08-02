@extends('dashboard.master')

@section('content')                    
                        {{-- FORMUALRIO --}}
<div class="container">

    {{-- Incluimos una vista dentro de otra --}}
    @include('dashboard.partials.validation-error')

    <form action="{{route('post.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Título:</label>
            <input class="form-control" type="text" name="title" value="" id="title" placeholder="Title">
            
           {{--  @error('title')
                <small class="text-danger">{{ $message }}</small>
            @enderror --}}

        </div>
        <div class="form-group">
            <label for="url_clean">URL-Limpia:</label>
            <input class="form-control" type="text" name="url_clean" value="" id="url_clean" placeholder="URL-Limpia">
        </div>
        <div class="form-group">
            <label for="content">Contenido:</label>
            <textarea class="form-control" rows="3" type="text" name="content" value="" id="content" placeholder=""></textarea>
        </div>
        <input type="submit" value="Enviar">   
    </form>
</div>



   
