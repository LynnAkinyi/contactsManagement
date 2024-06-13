<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;
    protected $table = 'groups';
    protected $fillable = [

        'name',
        'occupation',
        'email',
        'phone_number',
        'is_active',

    ];
}
