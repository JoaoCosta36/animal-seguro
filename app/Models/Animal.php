<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;
    protected $fillable = ['nome', 'especie', 'idade','dono_id'];

    public function dono()
    {
        return $this->belongsTo(Dono::class);
    }
}
