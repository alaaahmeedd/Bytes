<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notes extends Model
{
    use HasFactory;

    protected $fillabel = [
        'support_id',
        'Text',
    ];

    public function supports(){
        return $this->belongsTo(Support::class);
    }
}
