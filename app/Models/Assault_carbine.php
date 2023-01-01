<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Wepon;

class Assault_carbine extends Model
{
    use HasFactory;
    
    public function wepon()
    {
        return $this->belongsTo(Wepon::class);
    }
}
