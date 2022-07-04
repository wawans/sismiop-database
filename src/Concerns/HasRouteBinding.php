<?php

namespace Wawans\SismiopDatabase\Concerns;

use Wawans\SismiopDatabase\SismiopDatabase;

trait HasRouteBinding
{
    /**
     * Get the delimiter for route binding.
     *
     * @return string
     */
    public function getRouteDelimiter()
    {
        return SismiopDatabase::$routeDelimiter;
    }

    /**
     * Get the value of the model's route key.
     *
     * @return mixed
     */
    public function getRouteKey()
    {
        $keys = $this->getRouteKeyName();

        if (!is_array($keys)) {
            return $this->getAttribute($this->getRouteKeyName());
        }

        $attr = array_map(function ($k) {
            return $this->getAttribute($k);
        }, $keys);

        return join($this->getRouteDelimiter(), $attr);
    }

    /**
     * Retrieve the model for a bound value.
     *
     * @param mixed $value
     * @param string|null $field
     * @return \Illuminate\Database\Eloquent\Model|null
     */
     public function resolveRouteBinding($value, $field = null)
     {
         $keys = $field ?? $this->getRouteKeyName();
         $values = explode($this->getRouteDelimiter(), $value);

         return (is_array($keys) && (count($keys) != count($values))) ? null : parent::resolveRouteBinding($value, $field);
     }

    /**
     * Retrieve the model for a bound value.
     *
     * @param \Illuminate\Database\Eloquent\Model|Illuminate\Database\Eloquent\Relations\Relation $query
     * @param mixed $value
     * @param string|null $field
     * @return \Illuminate\Database\Eloquent\Relations\Relation
     */
    public function resolveRouteBindingQuery($query, $value, $field = null)
    {
        $keys = $field ?? $this->getRouteKeyName();

        if (!is_array($keys)) {
            return parent::resolveRouteBindingQuery($query, $value, $field);
        }

        $values = explode($this->getRouteDelimiter(), $value);

        return $query->where(array_combine($keys, $values));
    }
}
