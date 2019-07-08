@extends('welcome')
@section('title','Editar Producto')
@section('content')
<h1 class="text-center">Editar Producto</h1>
 <form action="{{Route('inventario.update',$inventario->id)}}" method="POST">
     @csrf
     @method('PUT')
     <div class="container col-md-3">
         <div class="form-group">
             <input type="text" class="form-control" name="producto" value="{{$inventario->nombre}}">
         </div>
         
         <div class="form-group">
             <input type="number" class="form-control" name="cantidad" value="{{$inventario->cantidad}}">
         </div>
         
         <div class="form-group">
             <input type="number" class="form-control" name="lote" value="{{$inventario->lote}}">
         </div>

         <div class="form-group">
             <input type="date" class="form-control" name="fecha" value="{{$inventario->fecha_vence}}">
         </div>

         <div class="form-group">
             <input type="number" class="form-control" name="precio" value="{{$inventario->precio}}">
         </div>
         <div class="text-center">
            <button class="btn btn-success">Editar</button>
        </div>
     </div>
 </form>
@endsection 

 