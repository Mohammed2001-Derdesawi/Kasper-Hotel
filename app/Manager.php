<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Manager extends Model
{
    protected $fillable = [
        'name', 'description', 'facebook','image','twitter','github',
    ];

    // /**
    //  * The roles that belong to the Manager
    //  *
    //  * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
    //  */
    // public function roles(): BelongsToMany
    // {
    //     return $this->belongsToMany(Role::class, 'manager_role_table', 'manager_id', 'role_id');
    // }
    // /**
    //  * Get all of the comments for the Manager
    //  *
    //  * @return \Illuminate\Database\Eloquent\Relations\HasMany
    //  */
    public function posts(): HasMany
    {
        return $this->hasMany(Post::class, 'manager_id', 'id');
    }

}
