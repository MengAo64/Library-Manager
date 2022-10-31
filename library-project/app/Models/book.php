<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'author','publisher','publication_date','status'];

    public function record(){
        return $this->hasMany(record::class,'book_id');
        
    }

    // public function show(){
    //     return $this->hasOne(book::class,'title', 'author','publisher','publication_date','status');
    // }
}
