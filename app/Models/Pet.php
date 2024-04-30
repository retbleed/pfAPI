<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'type',
        'user_id',
        'breed',
        'age',
        'personality',
        'image',
    ];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
