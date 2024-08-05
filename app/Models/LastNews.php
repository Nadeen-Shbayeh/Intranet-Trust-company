<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LastNews extends Model
{
    protected $fillable = [
        
        'description',
        'created_at',
        'status',
 
    ];
}
