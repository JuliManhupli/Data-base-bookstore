@extends('app')
@section('title')
    {{$genre->title}}
@endsection
@section('content')

    <h1>{{$genre->title}}</h1>

    <div class="container">
        @if($genre->books)
            <h2>Наявні такі книги:</h2>
            <div class="row">
            @foreach($genre->books as $book)
                <div class="col-lg-4">
                    <div class="element">
                        <img src="/pictures/books/{{$book->img}}.jpg">

                        <div>
                            <a href="{{route('book',$book->id)}}">{{$book->title}}</a>
                        </div>
                        @if($book->author)
                            <div>
                                <a href="{{route('author', $book->author->id)}}">{{$book->author->name.' '.$book->author->surname}} </a>
                            </div>
                        @else
                            <p>Автор невідомий</p>
                        @endif
                    </div>
                </div>
            @endforeach
            </div>
        @else
            <p>Книг немає в наявності</p>
        @endif
    </div>
@endsection



