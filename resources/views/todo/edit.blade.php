@extends('layouts.app')

@section('content')

<div class="w-100 h-100 d-flex justify-content-center align-items-center">

    <div class="w-auto">
    
     <h1 class=" "><kbd>Editando a: <kbd></h1>
     <h1 class="text-white mb-5">{{$todo->title}}</h1>

     <form action="{{route('todo.update',$todo->id)}}" method="POST">
     @csrf
     @method('PUT')

     <div class="input-group mb-3 w-100">
        <input type="text" class="form-group form-control-lg" name="title" value="{{$todo->title}}" aria-label="Usuario" aria-decribedby="button-addon2">

        <div class="input-group-append">
            <button class="btn btn-success" type="submit" id="button-addon2">Guardar</button>
        </div>
     
     </div>
     </form>


     
     
     </div>

    </div>

    

</div>

@endsection