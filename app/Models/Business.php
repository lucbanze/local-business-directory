<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'name', 'description', 'category', 'address', 'phone', 'image', 'approved'
    ];

    // Propriétaire (User)
    public function owner()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Reviews associées
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
