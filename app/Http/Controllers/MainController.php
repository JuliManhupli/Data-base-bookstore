<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Genre;
use Illuminate\Http\Request;
use App\Models\Author;

class MainController extends Controller
{
    //
    public function home(){
        return view('home');
    }

    public function authors(){
        $authors=Author::all();
        return view("authors", compact('authors'));
    }

    public function author($id){
        $author=Author::find($id);
        return view("author", compact('author'));
    }

    public function books(){
        $books=Book::all();
        return view("books", compact('books'));
    }

    public function book($id){
        $book=Book::find($id);
        return view("book", compact('book'));
    }

    public function genres(){
        $genres=Genre::all();
        return view("genres", compact('genres'));
    }

    public function genre($id){
        $genre=Genre::find($id);
        return view("genre", compact('genre'));
    }
}
