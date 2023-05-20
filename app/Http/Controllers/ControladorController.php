<?php

namespace App\Http\Controllers;

use App\Models\Controlador;
use Illuminate\Http\Request;

class ControladorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function fhome()
    {
        return view('layout/home');
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
    public function show(Controlador $controlador)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Controlador $controlador)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Controlador $controlador)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Controlador $controlador)
    {
        //
    }
}
