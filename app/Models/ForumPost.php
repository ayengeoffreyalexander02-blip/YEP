<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ForumPost extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'parent_id',
        'title',
        'content',
        'category',
        'tags',
        'views_count',
        'likes_count',
        'replies_count',
        'is_pinned',
        'is_solution',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function parent()
    {
        return $this->belongsTo(ForumPost::class, 'parent_id');
    }

    public function replies()
    {
        return $this->hasMany(ForumPost::class, 'parent_id');
    }

    public function incrementViews()
    {
        $this->increment('views_count');
    }

    public function toggleLike()
    {
        $this->increment('likes_count');
    }
}