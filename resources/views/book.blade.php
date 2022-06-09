@extends('app')
@section('title')
    {{$book->title}}
@endsection
@section('content')

    <h1>{{$book->title}}</h1>

    <div class="container">
        <div class="col-lg-4">
            <div class="element">
                <img src="/pictures/books/{{$book->img}}.jpg">
                @if($book->author)
                    <div>
                        <a href="{{route('author', $book->author->id)}}">{{$book->author->name.' '.$book->author->surname}} </a>
                    </div>
                @else
                    <p>Автор невідомий</p>
                @endif
                @if($book->genres)
                    @foreach($book->genres as $genre)
                        <div>
                            <a href="{{route('genre',$genre->id)}}">{{$genre->title}}</a>
                        </div>
                    @endforeach
                @else
                    <p>Жанри невідомі</p>
                @endif
            </div>
        </div>
    </div>
@endsection
