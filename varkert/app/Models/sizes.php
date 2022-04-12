<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sizes extends Model
{
    use HasFactory;
    protected $table ="sizes";
    public $timestamps=false;
    public function item()
    {
        return $this->hasMany(items::class, 'items', 'size');
    }
}
