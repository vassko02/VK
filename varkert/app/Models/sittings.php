<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sittings extends Model
{
    use HasFactory;
    protected $table ="sittings";
    public $timestamps=false;
    public function order(){
        return $this->hasMany(orders::class,'orders','sitting');
    }
    public function table(){
        return $this->belongsTo(tables::class,'table','id');
    }
}
