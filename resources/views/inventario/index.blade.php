@extends('welcome')
@section('title','Crear Producto')
@section('content')
<h1 class="text-center">Crear Producto</h1>
     <div class="container">
        <table class="table table-header table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>PRODUCTO</th>
                    <th>CANTIDAD</th>
                    <th>LOTE</th>
                    <th>FECHA</th>
                    <th>PRECIO</th>
                    <th>ACCION</th>
                </tr>
            </thead>
            <tbody>
                @foreach($inventario as $row)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$row->nombre}}</td>
                    <td>{{$row->cantidad}}</td>
                    <td>{{$row->lote}}</td>
                    <td>{{$row->fecha_vence}}</td>
                    <td>{{$row->precio}}</td>
                    <td>
                         <a href="{{Route('inventario.edit',$row->id)}}"><button class="btn btn-info">Editar</button></a>
                             <form action="{{Route('inventario.destroy',$row->id)}}" method="POST">
                                 @csrf
                                 @method('DELETE')
                                 <button class="btn btn-danger">Eliminar</button>
                             </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
     </div>
 
@endsection 

 
