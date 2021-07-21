senarai movie

<ul>
    @foreach ($movies as $movie)
        <li>{{$movie->nama}} price: {{$movie->harga}}, {{$movie->genre}}, {{$movie->rating}}</li>
    @endforeach
</ul>

<form method="POST" action="/movies">
    @csrf

    nama: <input type="text" name="nama">
    harga: <input type="number" name="harga">
    genre: <input type="text" name="genre">
    rating: <input type="number" name="rating">

    <!-- <input type="hidden" name="kedai_id" value=1> -->
    <button type="submit">Submit</button>
</form>