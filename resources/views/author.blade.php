@extends('app')
@section('title')
    {{$author->name.' '.$author->surname}}
@endsection
@section('content')

    <div class="container">
        <div class="col-lg-4">
            <div class="element">
                <img src="/pictures/authors/{{$author->img}}.jpg">

                <div>
                    <p>{{$author->name.' '.$author->surname}}</p>
                </div>
            </div>
        </div>
    </div>



    <div class="container">
        @if($author->books)
            <h2>Книги цього автора:</h2>
            <div class="row">
                @foreach($author->books as $book)
                    <div class="col-lg-4">
                        <div class="element">
                            <img src="/pictures/books/{{$book->img}}.jpg">

                            <div>
                                <a href="{{route('book',$book->id)}}">{{$book->title}}</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <p>Книг немає в наявності</p>
        @endif
    </div>
@endsection



