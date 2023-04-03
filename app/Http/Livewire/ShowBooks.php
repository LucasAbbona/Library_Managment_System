<?php

namespace App\Http\Livewire;

use App\Models\Book;
use App\Models\Issued;
use App\Models\Member;
use Livewire\Component;

class ShowBooks extends Component
{
    public $search;
 
    protected $queryString = ['search'];
 
    public function render()
    {
        return view('livewire.show-books', [
            'books' => Book::where('title', 'like', '%'.$this->search.'%')->orWhere('author','like','%'.$this->search.'%')->paginate(8),'last'=>Issued::all(),'owner'=>Member::all()
        ]);
    }
}
