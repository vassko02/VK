<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class items extends Model
{
    use HasFactory;
    protected $table="items";
    public $timestamps=false;
    public function category(){
        return $this->belongsTo(categories::class,'category','id');
    }
    public function orders(){
        return $this->belongsToMany(orders::class);
    }
    public function discount(){
        return $this->hasMany(discounts::class,'discounts','item');
    }
}
