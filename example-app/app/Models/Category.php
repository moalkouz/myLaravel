<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public function posts(){
        //this mean that the category has many post so ex sports may 100 post used it
        return $this->hasMany(Post::class);
    }
}
