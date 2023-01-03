<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Gun;
use App\Models\Tag;
use App\Models\User;

class Post extends Model
{
    use HasFactory;
    
    public function gun()
    {
        return $this->belongsTo(gun::class);
    }
    
    public function tag()
    {
        return $this->belongsTo(tag::class);
    }
    
    public function user()
    {
        return $this->belongsTo(user::class);
    }
}
