@extends('app')
@section('title')
    Книги
@endsection
@section('content')
    <h1>Усі книги</h1>

    <div class="container">
        <div class="row">
            @foreach($books as $book)
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
    </div>
@endsection
