<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable=[
        'title','excerpt','body','slug'
    ];
    public function category(){
        //to get access to all the another tabel that have a realation with post
        return $this->belongsTo(Category::class);
    }
    public function user(){
        //to get access to all the another tabel that have a realation with post
        return $this->belongsTo(User::class);
    }
}
