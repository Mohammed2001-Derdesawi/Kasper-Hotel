<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Content extends Model
{
    protected $fillable = [
        'section_id', 'Image', 'title','description','namebutton','manager_id',
    ];
    /**
     * Get the user associated with the Content
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function section(): HasOne
    {
        return $this->hasOne(Section::class, 'section_id', 'id');
    }

}
