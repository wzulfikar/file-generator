<?php

namespace {{namespace}};

use Illuminate\Database\Eloquent\Model;

class {{modelName}} extends Model
{
  /**
   * Get all of the owning {{polymorphicName}} models.
   */
  public function {{polymorphicName}}()
  {
      return $this->morphTo();
  }
}
