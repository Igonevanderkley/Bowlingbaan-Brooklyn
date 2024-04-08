<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservering extends Model
{
    use HasFactory;

    public function persoon()
    {
        return $this->belongsTo(Persoon::class);
    }
    public function spel()
    {
        return $this->belongsTo(Spel::class);
    }
}
