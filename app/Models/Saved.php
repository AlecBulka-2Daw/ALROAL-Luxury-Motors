<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Saved extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'car_id'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
