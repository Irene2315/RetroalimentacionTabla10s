<?php

namespace App\Http\Controllers;

use App\Models\CantidadProducto;
use Illuminate\Http\Request;

class CantidadProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cantidadProductos = CantidadProducto::all();

        return $cantidadProductos;
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
    }

    /**
     * Display the specified resource.
     */
    public function show(CantidadProducto $cantidadProducto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CantidadProducto $cantidadProducto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CantidadProducto $cantidadProducto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CantidadProducto $cantidadProducto)
    {
        //
    }
}