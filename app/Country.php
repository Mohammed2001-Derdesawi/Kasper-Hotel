<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Country extends Model
{
    protected $fillable = [
        'name',
    ];

    /**
     * Get all of the comments for the Country
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cities(): HasMany
    {
        return $this->hasMany(City::class, 'country_id', 'id');
    }

    /**
     * Get all of the comments for the Country
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function hotels(): HasMany
    {
        return $this->hasMany(Hotel::class, 'country_id', 'id');
    }

}
