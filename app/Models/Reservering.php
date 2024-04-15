<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 

class Reservering extends Model
{

    protected $table = 'reserverings';

    use HasFactory;


    public function persoon()
    {
        return $this->hasMany(persoon::class, 'persoonId');
    }

    public function reservering()
    {
        return $this->hasOne(baan::class, 'baanId');
    }

}
