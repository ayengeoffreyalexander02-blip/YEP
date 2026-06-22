<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MentorshipRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'mentee_id',
        'mentor_id',
        'reason',
        'status',
        'accepted_at',
        'started_at',
        'ended_at',
    ];

    protected $casts = [
        'accepted_at' => 'datetime',
        'started_at' => 'datetime',
        'ended_at' => 'datetime',
    ];

    public function mentee()
    {
        return $this->belongsTo(User::class, 'mentee_id');
    }

    public function mentor()
    {
        return $this->belongsTo(Mentor::class);
    }

    public function accept()
    {
        $this->update([
            'status' => 'accepted',
            'accepted_at' => now(),
        ]);
    }

    public function reject()
    {
        $this->update(['status' => 'rejected']);
    }
}