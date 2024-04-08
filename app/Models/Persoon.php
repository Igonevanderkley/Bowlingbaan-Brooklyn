<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persoon extends Model
{
    use HasFactory;
    protected $table = '_Persoon';
    public function reservering()
    {
        return $this->hasMany(Reservering::class);
    }
    public function spel()
    {
        return $this->hasMany(Spel::class);
    }
}
