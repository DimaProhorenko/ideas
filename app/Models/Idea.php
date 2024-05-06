<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Idea extends Model
{
    use HasFactory;
    protected $fillable = [
        'body'
    ];

    public function comments()
    {
        return $this->hasMany(Comment::class, 'idea_id', 'id');
    }
}
