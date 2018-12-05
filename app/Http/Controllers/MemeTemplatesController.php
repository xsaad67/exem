<?php

namespace App\Http\Controllers;

use App\MemeTemplates;
use Illuminate\Http\Request;

class MemeTemplatesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function show(){

        $categories = Category::all();


$categories = [
            'Horror',
            'Romance',
            'Fiction',
            'Action',
            'Adventure',
            'Humor',
            'Poetry',
            'Spiritual',
            'Short Story',
        ];





        return $categories;
        return "hello world";


    }


    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\MemeTemplates  $memeTemplates
     * @return \Illuminate\Http\Response
     */
    public function show(MemeTemplates $memeTemplates)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MemeTemplates  $memeTemplates
     * @return \Illuminate\Http\Response
     */
    public function edit(MemeTemplates $memeTemplates)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MemeTemplates  $memeTemplates
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MemeTemplates $memeTemplates)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MemeTemplates  $memeTemplates
     * @return \Illuminate\Http\Response
     */
    public function destroy(MemeTemplates $memeTemplates)
    {
        //
    }
}
