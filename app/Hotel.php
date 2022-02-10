<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Hotel extends Model
{


    protected $fillable = [
        'name', 'country_id', 'city_id','numberoffloor',
        'numberofroomsinonefloor' , 'stars','manager_id','salaryAtNight','description'
    ];

    /**
     * Get all of the comments for the Hotel
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function rooms(): HasMany
    {
        return $this->hasMany(Room::class, 'hotel_id', 'id');
    }

    /**
     * Get the city that owns the Hotel
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class, 'city_id', 'id');
    }
     /**
     * Get the city that owns the Hotel
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class, 'country_id', 'id');
    }


    /**
     * Get all of the comments for the Hotel
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */


    /**
     * Get the user that owns the Hotel
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function manager(): BelongsTo
    {
        return $this->belongsTo('App\Manager' , 'manager_id' , 'id');
    }


    /**
     * Get all of the comments for the Hotel
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function images(): HasMany
    {
        return $this->hasMany('App\HotelImageAdmin', 'hotel_id', 'id');
    }

}
