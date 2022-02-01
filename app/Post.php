<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Post extends Model
{

    protected $fillable = [
        'title','image','manager_id','user_id',
    ];



    /**
     * Get the user associated with the 2021_12_18_123149_create_posts_table
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function manager(): HasOne
    {
        return $this->hasOne(Manager::class, 'manager_id', 'id');
    }


   /**
    * The commnets that belong to the Post
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
    */
   public function commnets(): HasMany
   {
       return $this->hasMany(Comment::class, 'post_id','id');
   }

}
