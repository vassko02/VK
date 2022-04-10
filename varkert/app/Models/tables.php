<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tables extends Model
{
    use HasFactory;
    protected $table = "tables";
    public $timestamps = false;
    public function sitting()
    {
        return $this->hasMany(sittings::class, 'sittings', 'table');
    }
}
