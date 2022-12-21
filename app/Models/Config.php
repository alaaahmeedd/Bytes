<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    use HasFactory;

    protected $fillabel = [
        'product_id',
        'action_id',
        'message',
        'product_version'
    ];



    
}
