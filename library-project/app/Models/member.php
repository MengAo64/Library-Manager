<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class member extends Model
{
    use HasFactory;
    protected $flilable = ['name','join_date'];

    public function record(){
        return $this->hasMany(record::class,'member_id');
    }
}
