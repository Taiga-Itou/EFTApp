<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Gun;
use App\Models\Post;

class Wepon extends Model
{
    use HasFactory;
    
    
    public function Gun()
    {
        return $this->hasMany(Gun::class);    
    }
    
    public function posts()
    {
        return $this->hasMany(posts::class);
    }
    
}
