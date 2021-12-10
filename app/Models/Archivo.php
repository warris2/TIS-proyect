<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Archivo extends Model
{
    protected $fillable=[
        'tipo_1a',
        'tipo_2a',
        'tipo_3a',
        'tipo_4a',
        'tipo_1b',
    ];
    
}