<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'bio',
        'skills',
        'interests',
        'education_level',
        'institution',
        'field_of_study',
        'experience',
        'location',
        'social_linkedin',
        'social_twitter',
        'social_github',
        'notifications_enabled',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getSkillsArray()
    {
        return array_filter(explode(',', $this->skills ?? ''));
    }

    public function getInterestsArray()
    {
        return array_filter(explode(',', $this->interests ?? ''));
    }
}