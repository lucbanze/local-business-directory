<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'business_id', 'rating', 'comment', 'image'
    ];

    // Utilisateur qui a posté la review
    public function reviewer()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Business concerné par la review
    public function business()
    {
        return $this->belongsTo(Business::class, 'business_id');
    }
}
