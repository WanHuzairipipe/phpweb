<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kedai;
use App\Models\Movie;

class belian extends Model
{
    use HasFactory;

    public function kedai()
    {
        return $this->belongsTo(Kedai::class);
    }

    public function movies()
    {
        return $this->hasMany(Movie::class);
    }
}
