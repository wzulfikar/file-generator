{!! "<?" !!}

namespace {{$namespace}};

use Illuminate\Database\Eloquent\Model;

class {{ ucfirst( $modelName ) }} extends Model
{
  /**
   * Get all of the owning {{$polymorphicName}} models.
   */
  public function {{ strtolower( $polymorphicName )}}()
  {
      return $this->morphTo();
  }
}
