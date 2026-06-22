<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'type',
        'location',
        'virtual_link',
        'is_virtual',
        'start_date',
        'end_date',
        'organizer',
        'capacity',
        'registered_count',
        'image',
        'status',
    ];

    protected $casts = [
        'start_date' => 'datetime',
        'end_date' => 'datetime',
        'is_virtual' => 'boolean',
    ];

    public function registrations()
    {
        return $this->hasMany(EventRegistration::class);
    }

    public function getAvailableSeats()
    {
        return $this->capacity - $this->registered_count;
    }

    public function isFull()
    {
        return $this->getAvailableSeats() <= 0;
    }
}