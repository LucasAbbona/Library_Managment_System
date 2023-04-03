<?php

namespace App\Http\Livewire;

use App\Models\Issued;
use App\Models\Member;
use Livewire\Component;

class ShowMembers extends Component
{
    public $search;
 
    protected $queryString = ['search'];
 
    public function render()
    {
        return view('livewire.show-members', [
            'members' => Member::where('name', 'like', '%'.$this->search.'%')->orWhere('address','like','%'.$this->search.'%')->paginate(8),'issued'=>Issued::all()
        ]);
    }
}
