<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Licenes_Types extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function licenes(){
        return $this->hasMany(Licenes::class);
    }
}
