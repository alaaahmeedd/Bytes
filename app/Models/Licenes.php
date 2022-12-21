<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Licenes extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'user_id',
        'product_id',
        'type_id',
        'payment_id',
        'start_time',
        'end_time',
        'Qauta',
        'Max_Qauta'
    ];
}
