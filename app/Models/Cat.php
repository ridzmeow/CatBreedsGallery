<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    protected $casts = [
        'type' => 'array'
    ];
    
    protected $fillable = [
        'breed',
        'type',
        'coatLength'
    ];
}
