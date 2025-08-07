<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Event extends Model
{
    use HasFactory;

    protected $table = 'events';

    protected $fillable = 
    [
        'name',
        'description',
        'type',
        'venue',
        'date',
        'timestart',
        'timeend',
        'fees',
        'contact',
        'registration',
        'organizer',
        'extraInfo',
        'image',
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
