<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Support extends Model
{
    use HasFactory;

    protected $fillabel = [
        'account_id',
        'product_id',
        'states_id',
        'contact_info',
        'message',
        'info'
    ];

}
