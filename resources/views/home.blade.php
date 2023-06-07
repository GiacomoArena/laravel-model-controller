@extends('layout.main')

@section('content')
    <main>
        <div class="container">
            <h1>Movies</h1>

            <div class="container d-flex flex-wrap m-2">
                @foreach ($movies as $movie)
                    <div class="card m-2" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{$movie->title}}</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                the card's content.</p>
                            <a href="#" class="btn btn-success">Go somewhere</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
@endsection
