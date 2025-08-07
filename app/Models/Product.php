<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = 
    [
        'name',
        'description',
        'type',
        'price',
        'quantity',
        'quality',
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
