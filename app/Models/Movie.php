<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kedai;
use App\Models\Belian;

class movie extends Model
{
    use HasFactory;

    public function kedai()
    {
        return $this->belongsTo(Kedai::class);
    }

    public function belians()
    {
        return $this->hasMany(Belian::class);
    }
}
