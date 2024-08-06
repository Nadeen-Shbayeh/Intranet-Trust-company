<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class death extends Model
{
    protected $fillable = [
        'name',
        'description',
        'relation'
    ];
}
