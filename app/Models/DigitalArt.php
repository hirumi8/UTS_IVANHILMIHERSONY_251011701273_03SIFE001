<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DigitalArt extends Model
{
    use HasFactory;

    protected $table = 'digital_art';

    protected $fillable = [
        'title',
        'artist',
        'resolution',
        'price',
        'image',
        'software_used',
    ];
}