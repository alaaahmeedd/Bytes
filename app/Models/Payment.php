<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillabel = [
        'method',
    ];

    public function licenes(){
        return $this->hasMany(Licenes::class);
    }
}
