<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class City extends Model
{
    protected $fillable = [
        'name','country_id','description_city'
    ];
    /**
     * Get the user that owns the City
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class, 'country_id', 'id');
    }

/**
 * Get all of the comments for the City
 *
 * @return \Illuminate\Database\Eloquent\Relations\HasMany
 */
public function hotels(): HasMany
{
    return $this->hasMany(Hotel::class, 'city_id', 'id');
}
}
