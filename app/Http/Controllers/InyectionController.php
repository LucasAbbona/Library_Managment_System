<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Issued;
use App\Models\Member;
use Illuminate\Http\Request;

class InyectionController extends Controller
{
    public function addingIssues(Request $request){
        $data = $request->validate([
            'book_id'=>'required',
            'member_id'=>'required',
            'deadline'=>'required',
            'take_away'=>'required',
            'returned'=>'required'
        ]);
        Issued::create($data);
        return back();
    }
    public function addingMembers(Request $request){
        $data = $request->validate([
            'name'=>'required',
            'address'=>'required',
            'age'=>'required'
        ]);
        Member::create($data);
        return back();
    }
    public function addingBooks(Request $request){
        $data=$request->validate([
            'title'=>'required',
            'author'=>'required',
            'member_id'=>'required'
        ]);
        Book::create($data);
        return back();
    }
    
    //Deleting

    public function deletingMembers(Member $id){
        $id->delete();
        return back();
    }
    public function deletingBooks(Book $id){
        $id->delete();
        return back();
    }
}
