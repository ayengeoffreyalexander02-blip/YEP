<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'email',
        'password',
        'role',
        'phone',
        'profile_photo',
        'status',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function profile()
    {
        return $this->hasOne(UserProfile::class);
    }

    public function mentor()
    {
        return $this->hasOne(Mentor::class);
    }

    public function enrollments()
    {
        return $this->hasMany(Enrollment::class);
    }

    public function applications()
    {
        return $this->hasMany(Application::class);
    }

    public function mentorshipRequests()
    {
        return $this->hasMany(MentorshipRequest::class, 'mentee_id');
    }

    public function menteeFor()
    {
        return $this->hasMany(MentorshipRequest::class, 'mentor_id');
    }

    public function eventRegistrations()
    {
        return $this->hasMany(EventRegistration::class);
    }

    public function forumPosts()
    {
        return $this->hasMany(ForumPost::class);
    }

    public function notifications()
    {
        return $this->hasMany(Notification::class);
    }

    public function isMentor()
    {
        return $this->role === 'mentor' || $this->role === 'admin';
    }

    public function isAdmin()
    {
        return $this->role === 'admin';
    }
}