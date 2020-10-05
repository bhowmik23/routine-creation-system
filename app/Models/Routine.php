<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class Routine extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function color()
    {
        return $this->hasOne(Color::class, '_id', 'color_id');
    }
}
