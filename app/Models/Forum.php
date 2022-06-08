<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'title', 'body', 'category', 'isPublished', 'slug', 'like', 'dislike', 'report'];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function reports()
    {
        return $this->hasMany(Report::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
};
