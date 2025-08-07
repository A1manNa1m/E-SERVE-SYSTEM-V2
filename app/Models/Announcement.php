<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Announcement extends Model
{
    use HasFactory;

    protected $table = 'announcements';

    protected $fillable = 
    [
        'title',
        'description',
        'type',
        'category',
        'audience',
        'date',
        'timestart',
        'timeend',
        'contact',
        'extraInfo',
        'image',
        'organizer',
        'user_id',
        'status'
    ]; 

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function favourites()
    {
        return $this->morphMany(Favourite::class, 'favouritable');
    }
}
