<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'author','publication_date'];

    public function record(){
        return $this->hasMany(record::class,'book_id');
        
    }
}
