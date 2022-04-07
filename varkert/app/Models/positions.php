<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class positions extends Model
{
    use HasFactory;
    protected $table ="positions";
    public $timestamps=false;
    public function worker(){
        return $this->hasMany(workers::class,'workers','kategoria');
    }
}
