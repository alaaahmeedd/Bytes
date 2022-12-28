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
        'stats_id',
        'contact_info',
        'message',
        'info'
    ];

    public function products(){
        return $this->belongsTo(Product::class);
    }

    public function states(){
        return $this->belongsTo(Stats::class);
    }

    public function notes(){
        return $this->hasMany(Notes::class);
    }

}
