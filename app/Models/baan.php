<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class baan extends Model
{
    use HasFactory;

    public function persoon()
    {
        return $this->hasMany(persoon::class, 'baanId');
    }

}
