<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Room extends Model
{
    protected $fillable = [

        'people',
        'distance',
        'floor',
        'rating',
        'isclean',
        'loadTime',
        'room_price',
        'imageRoom',
        'hotel_id'


    ];
     
     public function hotel(): BelongsTo
     {
         return $this->belongsTo(Hotel::class, 'hotel_id', 'id');
     }
     

    /**
     * Get all of the comments for the Room
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function book(): HasMany
    {
        return $this->hasMany(Booked::class, 'room_id', 'id');
    }


}
