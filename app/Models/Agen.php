<?php

namespace App\Models;

use App\Models\Properti;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Agen extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function propertis()
    {
        return $this->hasMany(Properti::class);
    }
}
