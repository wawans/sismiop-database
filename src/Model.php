<?php

namespace Wawans\SismiopDatabase;

use Awobaz\Compoships\Compoships;
use Illuminate\Database\Eloquent\Model as EloquentModel;
use Illuminate\Support\Str;

/**
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Model newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Model newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Model query()
 *
 * @mixin \Eloquent
 */
class Model extends EloquentModel
{
    use Compoships;
    use Concerns\Composite;
    use Concerns\RouteBinding;

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Get the current connection name for the model.
     *
     * @return string|null
     */
    public function getConnectionName()
    {
        return config('sismiop-database.connection');
    }

    /**
     * Get the table associated with the model.
     *
     * @return string
     */
    public function getTable()
    {
        return $this->table ?? Str::snake(class_basename($this));
    }
}
