@extends('layouts/app')

@section('content')
    <div class="container py5">
        <h1>Tutti i film del nostro database</h1>

        <ul>
            @foreach ($movies as $movie)
            <li>
                {{ $movie->title}}
            </li>
            @endforeach
        </ul>
    </div>
@endsection
