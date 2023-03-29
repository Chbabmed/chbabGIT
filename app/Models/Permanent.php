<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Permanent extends Affectation
{
    use HasFactory;
    
    protected $table = 'permanent';

    public function Affectation()
    {
        return $this->belongsTo(Affectation::class);
    }
}
