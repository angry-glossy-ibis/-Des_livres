<?php

namespace App\Http\Controllers;

use App\Livre;
use Illuminate\Http\Request;

class LivreController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('livres.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return redirect()->action('LivreController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Livre  $livre
     * @return \Illuminate\Http\Response
     */
    public function show(Livre $livre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Livre  $livre
     * @return \Illuminate\Http\Response
     */
    public function edit(Livre $livre)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Livre  $livre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Livre $livre)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Livre  $livre
     * @return \Illuminate\Http\Response
     */
    public function destroy(Livre $livre)
    {
        //
    }
}
