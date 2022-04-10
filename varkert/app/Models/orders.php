<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orders extends Model
{
    use HasFactory;
    protected $table="orders";
    public $timestamps=false;
    public function sitting(){
        return $this->belongsTo(sittings::class,'sitting','id');
    }
    public function orderedFrom(){
        return $this->belongsTo(workers::class,'orderedFrom','id');
    }
}
