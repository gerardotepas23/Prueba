<?php

namespace App\Http\Controllers;

use App\Models\modelo_productos;
use Illuminate\Http\Request;

class controlador_productos extends Controller
{

    //public function index()
    public function index()
    {
        //Sin paginacion
        //$productos=modelo_productos::all();
        //return view('productos.index', compact('productos'));
        // paginacion


       $productos=modelo_productos::paginate(1);
       return view('productos.index', compact('productos'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $productos= new modelo_productos;
        $productos->nombre=$request->input('nombre');
        $productos->descripcion=$request->input('descripcion');
        $productos->preciounit=$request->input('preciounit');
        $productos->cantidad=$request->input('cantidad');
        $productos->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(modelo_productos $modelo_productos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(modelo_productos $modelo_productos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $idproducto)
    {
        //
    $productos= modelo_productos::where("idproducto", $idproducto)->first();
    //$productos->nombre=$request->input('nombre');
    //$productos->descripcion=$request->input('descripcion');
    //$productos->preciounit=$request->input('preciounit');
    $productos->cantidad=$request->input('cantidad');
    $productos->update();
    return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($idproducto)
    {
        //
        $productos= modelo_productos::where('idproducto',$idproducto);
        $productos->delete();
        return redirect()->back();
    }
}
