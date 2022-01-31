<?php

namespace App;

use App\Notifications\ManagerLogin;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Manager extends Authenticatable
{
   use HasRoles,CanResetPassword,Notifiable;
   protected $guard ='admin';


    protected $fillable = [
        'name' ,'email', 'description', 'facebook','image','twitter','github','password',
    ];
    protected $hidden = [
        'password', 'remember_token',
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
    /**
     * Get all of the hotels for the Manager
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function hotels(): HasMany
    {
        return $this->hasMany(Hotel::class, 'manager_id', 'id');
    }

    // public function notify($instance)
    // {
    //     $admins=Manager::role('Super Admin')->get();


    //     foreach($admins as $admin)
    //     {
    //      $admin->notify(new ManagerLogin());
    //     }

    // }




}
