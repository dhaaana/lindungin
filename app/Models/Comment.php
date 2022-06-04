<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = ['forum_id','user_id', 'body', 'like', 'dislike', 'report'];

    public function forum()
    {
    return $this->belongsTo(Forum::class);
    }
}
