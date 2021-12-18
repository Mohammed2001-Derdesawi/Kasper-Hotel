<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Role extends Model
{
    protected $fillable = [
        'Role',
    ];
/**
 * The roles that belong to the Role
 *
 * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
 */
public function managers(): BelongsToMany
{
    return $this->belongsToMany(Role::class, 'manager_role_table', 'manager_id', 'role_id');
}

}
