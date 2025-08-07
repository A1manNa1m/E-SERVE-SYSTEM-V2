<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Favourite extends Model
{
    use HasFactory;

    protected $guarded = [];    

    //table name
    protected $table = 'favourites';

    //list of attribute in favourite table
    protected $fillable = 
    [
        'user_id',
        'favouritable_id',
        'favouritable_type'   
    ]; 

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function favouritable(): MorphTo
    {
        return $this->morphTo();
    }
}
