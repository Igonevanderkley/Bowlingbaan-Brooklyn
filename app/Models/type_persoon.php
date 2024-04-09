<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class type_persoon extends Model
{
    use HasFactory;

    protected $table = 'type_persoon';

    public function persoon()
    {
        return $this->hasMany(type_persoon::class, 'persoonId');
    }

}
