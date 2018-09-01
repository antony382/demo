<?php

namespace processdrive\demo\http\controllers;

use processdrive\demo\models\demo;
use Illuminate\Http\Request;
// use App\Http\Controllers;

class DemoController extends \App\Http\Controllers\Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('welcome');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\demo  $demo
     * @return \Illuminate\Http\Response
     */
    public function show(demo $demo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\demo  $demo
     * @return \Illuminate\Http\Response
     */
    public function edit(demo $demo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\demo  $demo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, demo $demo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\demo  $demo
     * @return \Illuminate\Http\Response
     */
    public function destroy(demo $demo)
    {
        //
    }
}
