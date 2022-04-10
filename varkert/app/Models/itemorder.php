<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class itemorder extends Model
{
    use HasFactory;
    protected $table ="item_order";
    public $timestamps=false;
}
