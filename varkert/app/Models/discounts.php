<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class discounts extends Model
{
    use HasFactory;
    protected $table ="discounts";
    public $timestamps=false;
    public function item(){
        return $this->belongsTo(items::class,'item','id');
    }
}
