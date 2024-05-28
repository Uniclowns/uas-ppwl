<?php

namespace App\Models;

use App\Models\Agen;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Properti extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function agens()
    {
        return $this->belongsTo(Agen::class, 'agenId');
    }
}
