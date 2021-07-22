@extends('layouts.base')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12">
            <div class="card mb-2">
                <div class="card-header bg-secondary">
                    <div class="row align-items-center">
                        <div class="col">
                            <h5 class="h3 m-0">Senarai Movie</h5>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <ul>
                        @foreach ($movies as $movie)
                        <li>nama movie: {{$movie->nama}} harga: {{$movie->harga}},genre: {{$movie->genre}},rating: {{$movie->rating}}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-xl-12">
            <div class="card mb-3">
                <div class="card-header bg-secondary">
                    <div class="row align-items-center">
                        <div class="col">
                            <h5 class="h3 m-0">Tambah Movie Baru</h5>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form method="POST" action="/movie">
                        @csrf

                        nama: <input type="text" name="nama">
                        harga: <input type="number" name="harga">
                        genre: <input type="text" name="genre">
                        rating: <input type="number" name="rating">

                        <input type="hidden" name="kedai_id" value=1>
                        <input type="hidden" name="belian_id" value=1>
                        <button class="btn btn-success" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-xl-12">
            <div class="card">
                <div class="card-header bg-secondary">
                    <div class="row align-items-center">
                        <div class="col">
                            <h5 class="h3 m-0">Muat Naik Fail</h5>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="/fails" method="post" enctype="multipart/form-data">
                        @csrf
                        @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <strong>{{ $message }}</strong>
                        </div>
                        @endif

                        @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                        <div class="custom-file">
                            <input type="file" name="file" class="custom-file-input" id="chooseFile">
                            <label class="custom-file-label" for="chooseFile">Select file</label>
                        </div>

                        <button type="submit" name="submit" class="btn btn-primary btn-block mt-4">
                            Upload Files
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-xl-12">
            <div class="card">
                <div class="card-header bg-secondary">
                    <div class="row align-items-center">
                        <div class="col">
                            <h5 class="h3 m-0">Senarai Pelakon</h5>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Nama</th>
                                <th scope="col">Ketinggian</th>
                                <th scope="col">Berat</th>
                                <th scope="col">Hari Lahir</th>
                                <th scope="col">Jantina</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($starwar as $people)
                            <tr>
                                <td>{{ $people ['name'] }}</td>
                                <td>{{ $people ['height'] }}</td>
                                <td>{{ $people ['mass'] }}</td>
                                <td>{{ $people ['birth_year'] }}</td>
                                <td>{{ $people ['gender'] }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@stop