<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MissingPerson extends Model
{
    use HasFactory;

    protected $table = 'missing_people';

    protected $fillable = [
        'name',
        'slug',
        'nickname',
        'age',
        'gender',
        'hair',
        'eyes',
        'hashtag',
        'language',
        'citizenship',
        'poster',
        'last_seen_location',
        'place_of_birth',
        'date_last_seen',
        'dob',
        'suspicion',
        'description',
        'reporter_name',
        'reporter_contact',
        'status',
        'status_description',
    ];

    /**
     * Automatically cast date fields to Carbon instances.
     */
    protected $casts = [
        'date_last_seen' => 'date',
        'dob' => 'date',
    ];

    /**
     * Accessor for the poster URL.
     */
    public function getPosterUrlAttribute(): string
    {
        return $this->poster
            ? asset('storage/poster' . $this->poster)
            : asset('images/default-avatar.png');
    }

    /**
     * Scope for filtering missing people by status.
     */
    public function scopeStatus($query, $status)
    {
        return $query->where('status', $status);
    }
}
