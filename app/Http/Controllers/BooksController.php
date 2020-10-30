<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BooksController extends Controller
{
    //
     function insertData(Request $req)
     {
         $book = new Book;
         $book->name = $req->name;
         $book->author = $req->author;
         $book->price = $req->price;
         $book->imgurl = $req->imgurl;
         $book->save();
         return redirect('list');
     }
}
