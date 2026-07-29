<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'category',
        'description',
        'client',
        'year',
        'image_path',
        'link',
        'featured',
    ];

    public function getImageUrlAttribute()
    {
        if (str_starts_with($this->image_path, 'http://') || str_starts_with($this->image_path, 'https://') || str_starts_with($this->image_path, 'images/')) {
            return asset($this->image_path);
        }
        return asset('storage/' . $this->image_path);
    }
}
