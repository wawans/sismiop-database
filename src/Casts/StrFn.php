<?php

namespace Wawans\SismiopDatabase\Casts;

use Illuminate\Contracts\Database\Eloquent\CastsInboundAttributes;

/**
 * Wawans\SismiopDatabase\Casts\StrFn
 *
 * @method static StrFn __toString()
 */
class StrFn implements CastsInboundAttributes
{
    /**
     * Function name.
     *
     * @var string
     */
    protected $fn;

    /**
     * Constructor.
     *
     * @param string|null $fn
     */
    public function __construct(string $fn = null)
    {
        $this->fn = $fn;
    }

    /**
     * Prepare the given value for storage.
     *
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @param  string  $key
     * @param  mixed  $value
     * @param  array  $attributes
     * @return mixed
     */
    public function set($model, $key, $value, $attributes)
    {
        $f = $this->fn;

        return (is_null($f) || !function_exists($f)) ? $value : $f($value);
    }
}
