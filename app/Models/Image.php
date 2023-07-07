<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
        'image' => 'string|required',
        'title' => 'string|required',
        'description' => 'string|required',
    ];
}
