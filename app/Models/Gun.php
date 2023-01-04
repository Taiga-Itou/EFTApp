<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Wepon;
use App\Models\Post;

class Gun extends Model
{
    use HasFactory;
    
    public function wepon()
    {
        return $this->belongsTo(Wepon::class);
    }
    
    public function posts()
    {
        return $this->hasMany(posts::class);
    }
}
