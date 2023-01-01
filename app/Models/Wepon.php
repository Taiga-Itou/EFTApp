<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Assault_carbine;
use App\Models\Assault_rifle;
use App\Models\Bolt_action_rifle;
use App\Models\Machinegun;
use App\Models\Marksman_rifle;
use App\Models\Pistol;
use App\Models\Shotgun;
use App\Models\Sub_machinegun;

class Wepon extends Model
{
    use HasFactory;
    
    public function Assault_carbines()
    {
        return $this->hasMany(Assault_carbine::class);
    }
    public function Assault_rifles()
    {
        return $this->hasMany(Assault_rifle::class);
    }
    public function Bolt_aciton_rifles()
    {
        return $this->hasMany(Bolt_action_rifle::class);
    }
    public function Machineguns()
    {
        return $this->hasMany(Machinegun::class);
    }
    public function Marksman_rifles()
    {
        return $this->hasMany(Marksman_rifle::class);
    }
    public function Pistols()
    {
        return $this->hasMany(Pistol::class);
    }
    public function Shotguns()
    {
        return $this->hasMany(Shotgun::class);
    }
    public function Sub_machineguns()
    {
        return $this->hasMany(Sub_machinegun::class);
    }
}
