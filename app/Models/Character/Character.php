<?php

namespace App\Models\Character;

use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    protected $table = 'characters';

    protected $fillable = [
        'first_name',
        'last_name', 
        'description', 
        'age',
    ];

    protected $hidden = [
    ];
}
