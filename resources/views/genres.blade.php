@extends('app')
@section('title')
    Жанри
@endsection
@section('content')

    <h1>Жанри</h1>

    <div class="container">
    @foreach($genres as $genre)
        <div>
            <a href="{{route('genre',$genre->id)}}">
                {{$genre->title}}</a>
        </div>
        <br>
    @endforeach
    </div>
@endsection
