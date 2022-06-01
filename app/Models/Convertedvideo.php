<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Convertedvideo extends Model
{
    use HasFactory;

    public function video()
    {
        return $this->belongsTo('App\Models\Video');
    }
}
