@extends('layouts.plantilla')

@section('titulo','Registro')

@section('contenido')

    <h1 class="display-1 text-center text-dark mt-5" style="font-family:'Times New Roman';"> Registro </h1>

    @if(session()->has('confirmacion')) <!-- si hay una confirmacion que la ponga con un  alert -->
        <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
            <strong>{{ session('confirmacion') }}</strong> 
            <button type="button" class ="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="mt-3 card mb-5" style="width: 80rem; margin: auto;">

    <form method="POST" action="/guardarRegistro">
        @csrf 

        <div class="card mt-2 mb-2 " style="margin-left: 30px; margin-right: 30px; border: none !important">
            <div class="mt-2">
                <label for="exampleInputEmail1" class="form-label mt-3 mx-3" style="font-family:'Times New Roman';">ISBN:</label>
                <input type="text" name="txtISBN" class="form-control mb-2" value="{{old('txtISBN')}}">
                <p class='text-danger fst-italic'> {{ $errors->first('txtISBN') }} </p>

                <label for="exampleInputEmail1" class="form-label mt-3 mx-3" style="font-family:'Times New Roman';">Título:</label>
                <input type="text" name="txtTitulo" class="form-control mb-2" value="{{old('txtTitulo')}}">
                <p class='text-danger fst-italic'> {{ $errors->first('txtTitulo') }} </p>

                <label for="exampleInputEmail1" class="form-label mt-3 mx-3" style="font-family:'Times New Roman';">Autor:</label>
                <input type="text" name="txtAutor" class="form-control mb-2" value="{{old('txtAutor')}}">
                <p class='text-danger fst-italic'> {{ $errors->first('txtAutor') }} </p>

                <label for="exampleInputEmail1" class="form-label mt-3 mx-3" style="font-family:'Times New Roman';">Páginas:</label>
                <input type="text" name="txtPaginas" class="form-control mb-2" value="{{old('txtPaginas')}}">
                <p class='text-danger fst-italic'> {{ $errors->first('txtPaginas') }} </p>

                <label for="exampleInputEmail1" class="form-label mt-3 mx-3" style="font-family:'Times New Roman';">Editorial:</label>
                <input type="text" name="txtEditorial" class="form-control mb-2" value="{{old('txtEditorial')}}">
                <p class='text-danger fst-italic'> {{ $errors->first('txtEditorial') }} </p>
 
                <label for="exampleInputEmail1" class="form-label mt-3 mx-3" style="font-family:'Times New Roman';">Email de Editorial:</label>
                <input type="text" name="txtEmailEdit" class="form-control mb-2" value="{{old('txtEmailEdit')}}"> 
                <p class='text-danger fst-italic'> {{ $errors->first('txtEmailEdit') }} </p>
  
            </div>
        
            <button type="submit" class="btn btn-dark mb-4 mt-5" style="font-family:'Times New Roman';">Enviar</button>

        </div>

    </form>

    </div>

@endsection
    