<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Uitslagen extends Model
{
    use HasFactory;

    public function spel()
    {
        return $this->belongsTo(Spel::class);
    }
}
