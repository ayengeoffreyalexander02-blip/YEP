<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'category',
        'instructor',
        'duration_hours',
        'difficulty_level',
        'learning_outcomes',
        'image',
        'price',
        'capacity',
        'enrolled_count',
        'rating',
        'status',
        'start_date',
        'end_date',
    ];

    protected $casts = [
        'start_date' => 'datetime',
        'end_date' => 'datetime',
    ];

    public function enrollments()
    {
        return $this->hasMany(Enrollment::class);
    }

    public function certificates()
    {
        return $this->hasMany(Certificate::class);
    }

    public function getAvailableSeats()
    {
        return $this->capacity - $this->enrolled_count;
    }

    public function isFull()
    {
        return $this->getAvailableSeats() <= 0;
    }
}