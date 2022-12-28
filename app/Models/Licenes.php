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

    public function users(){
        return $this->belongsTo(User::class);
    }

    public function products(){
        return $this->belongsTo(Product::class);
    }

    public function types(){
        return $this->belongsTo(Licenes_Types::class);
    }

    public function payments(){
        return $this->belongsTo(Payment::class);
    }
    
}
