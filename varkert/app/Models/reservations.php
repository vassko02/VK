<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reservations extends Model
{
    use HasFactory;
    protected $table ="reservations";
    public $timestamps=false;
    public function table(){
        return $this->belongsTo(tables::class,'table','id');
    }
    public function talkedTo(){
        return $this->belongsTo(workers::class,'talkedTo','id');
    }
}
