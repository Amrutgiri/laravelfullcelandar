<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Celander extends Model
{
    use HasFactory;

    protected $table='celanders';
    protected $fillable=[
        'title',
        'color',
        'start',
        'end' 
    ];
}
