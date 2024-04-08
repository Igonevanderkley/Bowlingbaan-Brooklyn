<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservering extends Model
{
    use HasFactory;
    
    public function persoon()
    {
        return $this->belongsTo(Persoon::class, 'persoonId');
    }
    
    public function baan()
    {
        return $this->belongsTo(Baan::class, 'baanId');
    }
}

// In het Reservering-model

