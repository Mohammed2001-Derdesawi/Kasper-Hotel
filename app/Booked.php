<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Booked extends Model
{
    protected $fillable=[

   'room_id',
    'user_id',
    'StartDate',
    'EndDate',

    ];

    /**
     * Get the user that owns the Booked
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }



     /**
      * Get the user that owns the Booked
      *
      * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
      */
     public function room(): BelongsTo
     {
         return $this->belongsTo(Room::class, 'room_id', 'id');
     }

}
