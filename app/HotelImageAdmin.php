<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HotelImageAdmin extends Model
{
    protected $fillable = ['imageName' , 'hotel_id'];


    /**
     * Get the hotel that owns the HotelImageAdmin
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function hotel(): BelongsTo
    {
        return $this->belongsTo('App\Hotel', 'hotel_id', 'id');
    }
}
