<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
// use Illuminate\Support\Facades\DB;

class BookListController extends Controller
{
    //
    // function getdata(){
    //     return DB::select('select * from books');
    // }

     function getData(){
         $data = Book::all();
         return view('bookList',['booklist'=> $data ]);
     }

     function delete($id){
        $data = Book::find($id);
        $data->delete();
        return redirect('list');
     }

     function showData($id){
        $data = Book::find($id);
        return view('editForm',['data'=> $data]);
     }

     function updateData(Request $req){
        $data = Book::find($req->id);
        $data->name = $req->name;
        $data->author = $req->author;
        $data->price = $req->price;
        $data->imgurl = $req->imgurl;
        $data->save();
        return redirect('list');
     }
}
