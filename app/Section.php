<?php

namespace App;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $fillable = [
        'sec_name', 'description',
    ];
    /**
     * Get all of the comments for the section
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contents(): HasMany
    {
        return $this->hasMany(Content::class, 'section_id', 'id');
    }

  /**
     * Get all of the comments for the Content
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function buttons(): HasMany
    {
        return $this->hasMany(Button::class, 'section_id', 'id');
    }


}
