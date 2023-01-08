<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Gun;
use App\Models\Tag;
use App\Models\User;
use App\Models\Wepon;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;
    
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
    
    
    public function getPaginateByLimit(int $limit_count = 10)
    {
        return $this->orderBy('update_at','DESC')->paginate($limit_count);
    }
    
    public function wepon()
    {
        return $this->belongsTo(wepon::class);
    }
    
    protected $fillable =[
        'title',
        'body',
        'user_id',
        'gun_id',
        'image',
        'tag_id',
    ];
}
