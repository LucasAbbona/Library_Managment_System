<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{   

    protected $fillable= [
        'title',
        'author',
        'member_id'
    ];
    use HasFactory;
    public function issueds(){
        return $this->hasMany(Issued::class);
    }
}
