<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $table = 'artists';
    
    protected $fillable = [
        'id', 'country_id', 'name', 'avatar', 'description',
    ];

    public function songs() {
        return $this->hasMany(Song::class);
    }

    public function country() {
        return $this->belongsTo(Country::class);
    }
}
