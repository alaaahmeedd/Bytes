<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Config_Action extends Model
{
    use HasFactory;

    protected $fillabel = [
        'name',
    ];

    public function configs(){
        return $this->hasMany(Config::class);
    }
}
