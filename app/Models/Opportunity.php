<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opportunity extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'type',
        'organization',
        'location',
        'requirements',
        'benefits',
        'category',
        'positions_available',
        'applications_count',
        'deadline',
        'salary',
        'employment_type',
        'status',
    ];

    protected $casts = [
        'deadline' => 'datetime',
    ];

    public function applications()
    {
        return $this->hasMany(Application::class);
    }

    public function isDeadlineExpired()
    {
        return $this->deadline->isPast();
    }

    public function getAvailablePositions()
    {
        return $this->positions_available;
    }
}