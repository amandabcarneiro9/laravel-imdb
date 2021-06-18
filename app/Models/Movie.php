<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Movie extends Model
{
    use HasFactory;

    public function genres()
    {
        return $this->belongsToMany(Genre::class);
    }

    public function languages()
    {
        return $this->belongsToMany(Language::class);
    }


    public function types()
    {
        return $this->hasMany(Type::class, 'movie_types');
    }

    public function country()
    {
        return $this->belongsToMany(Country::class, 'origin_countries');
    }
}
