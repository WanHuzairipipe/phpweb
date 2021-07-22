<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use App\Mail\Moviebaru;
use Illuminate\Support\Facades\Http;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response = Http::get('https://swapi.dev/api/people');

        $response->json();
        $movies = Movie::all();
        return view('movies.index',[
            'movies'=>$movies,
            'starwar' => $response['results']
        ]);
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
        $movie = new Movie;

        $movie->nama = $request->nama;
        $movie->harga = $request->harga;
        $movie->genre = $request->genre;
        $movie->rating = $request->rating;

        $movie->kedai_id = $request->kedai_id;
        $movie->belian_id = $request->belian_id;

        $movie->save();

        foreach (['whoone3@gmail.com', 'najhan.mnajib@gmail.com'] as $recipient) {
            Mail::to($recipient)->send(new MovieBaru());
        }
        return redirect('/movie/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {
        return view('movies.show',[
            'movie'=>$movie
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movie $movie)
    {
        $path = $request->file('file')->store('files');

        dd($path);

        $movie->nama = $request->nama;
        $movie->harga = $request->harga;
        $movie->genre = $request->genre;
        $movie->rating = $request->rating;

        $movie->kedai_id = $request->kedai_id;

        $movie->save();

        return redirect('/movie/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {
        //
    }
}
