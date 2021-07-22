<?php

namespace App\Http\Controllers;

use App\Models\Kedai;
use Illuminate\Http\Request;

class KedaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return redirect('/kedais/');
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
     * @param  \App\Models\Kedai  $kedai
     * @return \Illuminate\Http\Response
     */
    public function show(Kedai $kedai)
    {
        return view('kedais.show',[
            'kedai'=>$kedai
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kedai  $kedai
     * @return \Illuminate\Http\Response
     */
    public function edit(Kedai $kedai)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kedai  $kedai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kedai $kedai)
    {
        $kedai->nama = $request->nama;
        $kedai->lokasi = $request->lokasi;

        $kedai->movie_id = $request->movie_id;
        $kedai->belian_id = $request->belian_id;

        // $kedai>save();

        return redirect('/kedais/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kedai  $kedai
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kedai $kedai)
    {
        //
    }
}
