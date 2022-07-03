<?php

namespace Wawans\SismiopDatabase\Lookup;

use Wawans\SismiopDatabase\Casts\StrFn;
use Wawans\SismiopDatabase\Model;

/**
 * Wawans\SismiopDatabase\Lookup\LookupItem
 *
 * @property string $KD_LOOKUP_GROUP
 * @property string $KD_LOOKUP_ITEM
 * @property string|null $NM_LOOKUP_ITEM
 * @property StrFn $nm_lookup_item
 * @property-read mixed $nama
 * @property-read \Wawans\SismiopDatabase\Lookup\LookupGroup|null $group
 * @property-read \Wawans\SismiopDatabase\Lookup\LookupGroup|null $lookupGroup
 * @method static \Illuminate\Database\Eloquent\Builder|LookupItem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LookupItem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LookupItem query()
 * @method static \Illuminate\Database\Eloquent\Builder|LookupItem whereGroup($group)
 * @method static \Illuminate\Database\Eloquent\Builder|LookupItem whereGroupItem($group, $item)
 * @method static \Illuminate\Database\Eloquent\Builder|LookupItem whereItem($item)
 * @mixin \Eloquent
 */
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
    protected $fillable = [
        'kd_lookup_group',
        'kd_lookup_item',
        'nm_lookup_item',
    ];

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
    protected $casts = [
        'nm_lookup_item' => StrFn::class . ':strtoupper',
    ];

    public function lookupGroup()
    {
        return $this->belongsTo(LookupGroup::class, 'kd_lookup_group', 'kd_lookup_group');
    }

    public function group()
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

    public function getNamaAttribute()
    {
        return $this->nm_lookup_item;
    }
}
