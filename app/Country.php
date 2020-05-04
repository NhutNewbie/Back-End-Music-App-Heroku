<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = 'countrys';
    
    protected $fillable = [
        'id', 'name', 'image', 'description',
    ];

    public function songs() {
        return $this->hasMany(Song::class);
    }

    public function artists() {
        return $this->hasMany(Artist::class);
    }
}
