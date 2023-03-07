<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.menu.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function crear()
    {
        return view('admin.menu.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function guardar(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function mostrar(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editar(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function actualizar(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function eliminar(string $id)
    {
        //
    }
}
