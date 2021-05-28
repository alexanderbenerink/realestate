<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Houses extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'address',
        'city',
        'price',
        'image',
        'house_type',
        'description',
        'postal_code',
        'surface_area',
        'published_at',
    ];

    protected $casts = [
        'created_at' => 'date',
    ];

    public function user() {
        return $this->belongsTo("User");
    }
}
