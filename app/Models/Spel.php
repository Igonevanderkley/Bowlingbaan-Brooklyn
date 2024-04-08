<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spel extends Model
{
    use HasFactory;

    public function persoon()
    {
        return $this->belongsTo(Persoon::class);
    }
    public function reservering()
    {
        return $this->belongsTo(Reservering::class);
    }
}
