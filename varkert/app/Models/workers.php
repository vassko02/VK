<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class workers extends Model
{
    use HasFactory;
    protected $table="workers";
    public $timestamps=false;

    public function position(){
        return $this->belongsTo(positions::class,'position','id');
    }
    public function order(){
        return $this->hasMany(orders::class, 'orders', 'worker');
    }
}

