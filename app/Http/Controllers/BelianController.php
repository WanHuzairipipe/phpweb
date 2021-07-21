<?php

namespace App\Http\Controllers;

use App\Models\Belian;
use Illuminate\Http\Request;

class BelianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $belian = new Belian;
        
        $belian->tarikh = $request->tarikh;
        $belian->harga = $request->harga;

        $belian->movie_id = $request->movie_id;
        $belian->kedai_id = $request->kedai_id;

        $belian->save();

        return redirect('/belians/');
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
     * @param  \App\Models\Belian  $belian
     * @return \Illuminate\Http\Response
     */
    public function show(Belian $belian)
    {
        return view('belians.show',[
            'belian'=>$belian
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Belian  $belian
     * @return \Illuminate\Http\Response
     */
    public function edit(Belian $belian)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Belian  $belian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Belian $belian)
    {
        $belian->tarikh = $request->tarikh;
        $belian->harga = $request->harga;

        $belian->movie_id = $request->movie_id;
        $belian->kedai_id = $request->kedai_id;

        $belian->save();

        return redirect('/belians/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Belian  $belian
     * @return \Illuminate\Http\Response
     */
    public function destroy(Belian $belian)
    {
        //
    }
}
