<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Celebrity extends Model
{
    use HasFactory;

    protected $fillable = [
    'image',
    'name',
    'country',
    'height',
    'category',
    'birth_date',
    'death_date',
    'image',
    'excerpt',
    'biography',];
}
