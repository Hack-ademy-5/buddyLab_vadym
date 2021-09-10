@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-12">
<!-- -------------------------------------------------FORMULARIO----------------------------------------------------->  
      <form method="POST" action="{{route('articles.store')}}"> <!-- Metodo POST con su ruta -->
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Titulo</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="title" value="{{old('title')}}"> <!-- type="text" y name="title" para indicar q el campo es tipo texto y title se refiere a la columna  -->
                @error('title')
                <div class="alert alert-danger">El campo titulo es obligatorio</div> 
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Imagen</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="img" value="{{old('img')}}"> <!-- type="text" y name="img" para indicar q el campo es tipo texto y img se refiere a la columna  -->
                @error('img')
                <div class="alert alert-danger">El campo imagen es obligatorio</div> 
                @enderror
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Texto</label>
                <textarea name="text" id="" cols="30" rows="10" class="form-control">{{old('text')}}</textarea>
                @error('text')
                <div class="alert alert-danger">El campo texto es obligatorio</div> 
                @enderror
            </div>
           
            <button type="submit" class="btn btn-primary">Crear</button>
        </form>
   <!-- -------------------------------------------------FORMULARIO----------------------------------------------->

    </div>
</div>
@endsection
