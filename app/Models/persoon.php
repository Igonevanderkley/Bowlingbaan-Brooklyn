<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class persoon extends Model
{
    use HasFactory;

    protected $table = 'persoon';

    public function type_persoon()
    {
        return $this->hasOne(type_persoon::class, 'typePersoonId');
    }

    public function baan()
    {
        return $this->hasOne(baan::class, 'baanId');
    }

}