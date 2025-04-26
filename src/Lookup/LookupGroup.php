<?php

namespace Wawans\SismiopDatabase\Lookup;

use Wawans\SismiopDatabase\Casts\StrFn;
use Wawans\SismiopDatabase\Model;

/**
 * Wawans\SismiopDatabase\Lookup\LookupGroup
 *
 * @property string $kd_lookup_group
 * @property string|null $nm_lookup_group
 * @property-read mixed $nama
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Wawans\SismiopDatabase\Lookup\LookupItem> $item
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Wawans\SismiopDatabase\Lookup\LookupItem> $lookupItem
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LookupGroup newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LookupGroup newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LookupGroup query()
 *
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
        'nm_lookup_group',
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
        'nm_lookup_group' => StrFn::class.':strtoupper',
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
