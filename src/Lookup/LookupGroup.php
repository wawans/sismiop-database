<?php

namespace Wawans\SismiopDatabase\Lookup;

use Wawans\SismiopDatabase\Casts\StrFn;
use Wawans\SismiopDatabase\Model;

/**
 * Wawans\SismiopDatabase\Lookup\LookupGroup
 *
 * @property string $KD_LOOKUP_GROUP
 * @property string|null $NM_LOOKUP_GROUP
 * @property StrFn $nm_lookup_group
 * @property-read mixed $nama
 * @property-read \Illuminate\Database\Eloquent\Collection|\Wawans\SismiopDatabase\Lookup\LookupItem[] $item
 * @property-read int|null $item_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Wawans\SismiopDatabase\Lookup\LookupItem[] $lookupItem
 * @property-read int|null $lookup_item_count
 * @method static \Illuminate\Database\Eloquent\Builder|LookupGroup newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LookupGroup newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LookupGroup query()
 * @mixin \Eloquent
 */
class LookupGroup extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'kd_lookup_group';

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
        'nm_lookup_group'
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
        'nm_lookup_group' => StrFn::class . ':strtoupper',
    ];

    public function lookupItem()
    {
        return $this->hasMany(LookupItem::class, $this->primaryKey, $this->primaryKey);
    }

    public function item()
    {
        return $this->hasMany(LookupItem::class, $this->primaryKey, $this->primaryKey);
    }

    public function getNamaAttribute()
    {
        return $this->nm_lookup_group;
    }
}
