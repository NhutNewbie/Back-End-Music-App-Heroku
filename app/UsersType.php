<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsersType extends Model
{
    protected $table = 'users_types';
    
    protected $fillable = [
        'id', 'user_position', 'description'
    ];

    public function users() {
        return $this->hasMany(User::class);
    }
}
