<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class record extends Model
{
    use HasFactory;
    protected $with = ["book", "member"]; 

    public function member(){
        return $this->belongsTo(member::class,'member_id');
    }
    
    public function book(){
        return $this->belongsTo(book::class, 'book_id');
    }
    
}
