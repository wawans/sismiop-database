<?php

namespace Wawans\SismiopDatabase\Lookup;

use Wawans\SismiopDatabase\Model;

class LookupItem extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'kd_lookup_item';

    /**
     * The "type" of the primary key ID.
     *
     * @var string
     */
    protected $keyType = 'string';

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [];

    public function lookupGroup()
    {
        return $this->belongsTo(LookupGroup::class, 'kd_lookup_group', 'kd_lookup_group');
    }

    /**
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @param  mixed $group
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeWhereGroup($query, $group)
    {
        return $query->where('kd_lookup_group', $group);
    }

    /**
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @param  mixed $item
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeWhereItem($query, $item)
    {
        return $query->where('kd_lookup_item', $item);
    }

    /**
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param $group
     * @param $item
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeWhereGroupItem($query, $group, $item)
    {
        return $query->whereGroup($group)->whereItem($item);
    }
}
