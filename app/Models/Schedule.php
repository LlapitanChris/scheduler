<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Schedule extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function user(){
    	return $this->belongsTo(User::class);
    }

    public function program(){
    	return $this->belongsTo(Program::class);
    }

    public function level(){
    	return $this->belongsTo(Level::class);
    }
}
