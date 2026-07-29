<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_name',
        'client_company',
        'client_role',
        'content',
        'rating',
        'client_avatar',
    ];

    public function getAvatarUrlAttribute()
    {
        if (!$this->client_avatar) {
            return null;
        }
        if (str_starts_with($this->client_avatar, 'http://') || str_starts_with($this->client_avatar, 'https://') || str_starts_with($this->client_avatar, 'images/')) {
            return asset($this->client_avatar);
        }
        return asset('storage/' . $this->client_avatar);
    }
}
