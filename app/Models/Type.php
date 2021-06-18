<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    protected $table = 'movie_types';

    public function Movie()
    {
        return $this->belongsTo(Movie::class);
    }
}