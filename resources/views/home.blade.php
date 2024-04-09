@extends('layouts/app')

@section('content')
<div class="my_container">
    <div class="container py-5 text-center">
        <h1>Tutti i film del nostro database</h1>
        <div class="row pt-5">
            @foreach ($movies as $movie)
            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{$movie->title}}</h5>
                        <p class="card-text">{{$movie->original_title}}</p><br>
                        <p class="card-text"><strong>Data:</strong> {{$movie->date}}</p>
                        <p class="card-text"><strong>Voto:</strong> {{$movie->vote}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
