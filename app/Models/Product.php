<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillabel = [
        'name',
        'info',
        'current_version',
        'thumbnail',
    ];

    public function licenes(){
        return $this->hasMany(Licenes::class);
    }

    public function supports(){
        return $this->hasMany(Support::class);
    }

    public function configs(){
        return $this->hasMany(Config::class);
    }
}
