<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Issued;
use App\Models\Member;
use Illuminate\Http\Request;

class ViewsController extends Controller
{
    public function dashboard(){
        $members = Member::all();
        $books = Book::all();
        $issued = Issued::all();
        $returned = Issued::all()->where('returned',1);
        $notReturned = Issued::all()->where('returned',0);
        $closerDeadline = Issued::select('member_id','book_id')->where('returned',0)->where('deadline','>=',date('Y-m-d'))->orderBy('deadline','asc')->first();
        return view('dashboard',compact('members','books','issued','returned','notReturned','closerDeadline'));
    }
    public function books(){
        return view('books');
    }
    public function members(){
        return view('members');
    }
    public function issued(){
        $books = Book::all();
        $issued= Issued::paginate(8);
        $members = Member::all();
        return view('issued',compact('issued','members','books'));
    }
    public function returned(){
        $books = Book::all();
        $issued= Issued::paginate(8);
        $members = Member::all();
        return view('returned',compact('issued','members','books'));
    }
    public function notReturned(){
        $books = Book::all();
        $issued= Issued::paginate(8)->where('returned',0);
        $members = Member::all();
        return view('notreturned',compact('issued','members','books'));
    }
    //Usar Query Scopes en los Model para obtener de forma dinamica los libros returned 
    
    //Usar Polymorphic relationships para simplificar codigo y relacionar las 3 tablas
    
    //Use Select Fields: If you only need certain fields from the models, you can use the select() method to select those fields only. This can improve performance by reducing the amount of data that needs to be fetched from the database.

    //Use Pagination: Instead of fetching all records at once, you can use pagination to fetch records in smaller batches. You can use the paginate() method to paginate records. 

    
}