<?php

namespace Prueba\Http\Controllers;

use Illuminate\Http\Request;
use Prueba\Models\Inventario as I;

class InventarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inventario = I::all();
        return view('inventario.index',compact('inventario'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('inventario.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inventario = new I();
        $inventario->nombre = $request->producto;
        $inventario->cantidad = $request->cantidad;
        $inventario->lote = $request->lote;
        $inventario->fecha_vence = $request->fecha;
        $inventario->precio = $request->precio;

        $inventario->save();

        return redirect()->route('inventario.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $inventario = I::find($id);
        return view('inventario.edit',compact('inventario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $inventario = I::find($id);
        $inventario->nombre = $request->producto;
        $inventario->cantidad = $request->cantidad;
        $inventario->lote = $request->lote;
        $inventario->fecha_vence = $request->fecha;
        $inventario->precio = $request->precio;

        $inventario->save();

        return redirect()->route('inventario.index',compact('inventario'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $inventario = I::find($id)->delete();
        return redirect()->route('inventario.index');
    }
}
