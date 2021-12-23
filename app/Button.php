<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Button extends Model
{
    protected $fillable = [
        'value','section_id','content_id'
    ];
  /**
   * Get the user that owns the Button
   *
   * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
   */
  public function section(): BelongsTo
  {
      return $this->belongsTo(Section::class, 'section_id', 'id');
  }

  /**
   * Get the user that owns the Button
   *
   * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
   */
  public function content(): BelongsTo
  {
      return $this->belongsTo(Content::class, 'content_id', 'id');
  }
}
