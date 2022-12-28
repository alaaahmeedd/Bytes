<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stats extends Model
{
    use HasFactory;

    protected $fillabel = [
        'name'
    ];

    public function support(){
        return $this->hasMany(Support::class);
    }
}
