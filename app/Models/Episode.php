<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $casts = [
        'released_at' => 'datetime',
    ];
    // protected $dates = [
    //     'created_at',
    //     'updated_at',
    //     'released_at'
    // ];
}
