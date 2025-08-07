<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Service extends Model
{
    use HasFactory;

    protected $table = 'services';

    protected $fillable = 
    [
        'name',
        'description',
        'type',
        'venue',
        'availability',
        'timestart',
        'timeend',
        'fees',
        'contact',
        'extraInfo',
        'image',
        'user_id',
        'organizer',
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
