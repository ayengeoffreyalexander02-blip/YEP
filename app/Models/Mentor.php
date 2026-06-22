<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mentor extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'expertise',
        'years_of_experience',
        'specialization',
        'mentoring_areas',
        'max_mentees',
        'status',
        'rating',
        'reviews_count',
        'verified',
        'verified_at',
    ];

    protected $casts = [
        'verified_at' => 'datetime',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function mentorshipRequests()
    {
        return $this->hasMany(MentorshipRequest::class);
    }

    public function getActiveMenteesCount()
    {
        return $this->mentorshipRequests()
            ->where('status', 'accepted')
            ->count();
    }

    public function canAcceptMoreMentees()
    {
        return $this->getActiveMenteesCount() < $this->max_mentees;
    }
}