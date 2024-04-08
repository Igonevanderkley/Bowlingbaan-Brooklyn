<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservering extends Model
{

    protected $table = 'reservering';

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
