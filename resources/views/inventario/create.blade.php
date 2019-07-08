@extends('welcome')
@section('title','Crear Producto')
@section('content')
<h1 class="text-center">Crear Producto</h1>
 <form action="{{Route('inventario.store')}}" method="POST">
     @csrf
     <div class="container col-md-3">
         <div class="form-group">
             <input type="text" class="form-control" name="producto" placeholder="Nombre del producto">
         </div>
         
         <div class="form-group">
             <input type="number" class="form-control" name="cantidad" placeholder="cantidad del producto">
         </div>
         
         <div class="form-group">
             <input type="number" class="form-control" name="lote" placeholder="lote del producto">
         </div>

         <div class="form-group">
             <input type="date" class="form-control" name="fecha" placeholder="f. vencimiento del producto">
         </div>

         <div class="form-group">
             <input type="number" class="form-control" name="precio" placeholder="precio del producto">
         </div>

         <div class="text-center">
            <button class="btn btn-success">Crear</button>
        </div>
     </div>
 </form>
@endsection 

 
