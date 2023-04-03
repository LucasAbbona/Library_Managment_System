<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Issued extends Model
{
    
    use HasFactory;

    protected $fillable = [
        'book_id',
        'member_id',
        'deadline',
        'take_away',
        'returned'
    ];
    public function book(){
        return $this->belongsTo(Book::class);
    }
    public function member(){
        return $this->belongsTo(Member::class);
    }
}
