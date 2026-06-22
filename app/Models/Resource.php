<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'type',
        'file_path',
        'category',
        'author',
        'download_count',
        'file_size',
        'image',
        'status',
    ];

    public function incrementDownloads()
    {
        $this->increment('download_count');
    }
}