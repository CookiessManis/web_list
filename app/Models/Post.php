<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;


    protected $fillable = [
        'name', 'url','id_jenis',
    ];

//    public function post(){
//     return $this->hasMany(jenis::class);
//    }
}
