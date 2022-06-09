@extends('app')
@section('title')
    Автори
@endsection
@section('content')
    <h1>Усі aвтори</h1>

    <div class="container">
        <div class="row">
            @foreach($authors as $author)
                <div class="col-lg-4">
                    <div class="element">
                        <img src="/pictures/authors/{{$author->img}}.jpg">

                        <div>
                            <a href="{{route('author', $author->id)}}">{{$author->name.' '.$author->surname}} </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
