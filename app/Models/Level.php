<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    use HasFactory;
    public function schedules(){
    	return $this->hasMany(Schedule::class);
    }

    public function programs(){
    	return $this->belongsToMany(Program::class);
    }
}
