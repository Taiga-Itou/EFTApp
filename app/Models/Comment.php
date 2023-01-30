<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class Comment extends Model
{
    use HasFactory;
    
    public function post()
    {
        return $this->hasMany(post::class);
    }
    
    public function user()
    {
        return $this->belongsTo(user::class);
    }
    
    protected $fillable =[
        'post_id',
        'body',
        'user_id',
        
    ];
}
