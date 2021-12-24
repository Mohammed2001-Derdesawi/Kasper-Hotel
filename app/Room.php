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
        'roomType'


    ];
     /**
      * Get the user associated with the Room
      *
      * @return \Illuminate\Database\Eloquent\Relations\HasOne
      */
     public function hotel(): HasOne
     {
         return $this->hasOne(Hotel::class, 'hotel_id', 'id');
     }
     /**
      * Get the user associated with the Room
      *
      * @return \Illuminate\Database\Eloquent\Relations\HasOne
      */
     public function booked(): BelongsTo
     {
         return $this->belongsTo(User::class, 'room_id', 'id');
     }



}
