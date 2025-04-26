<?php

namespace Wawans\SismiopDatabase\Resource;

use Wawans\SismiopDatabase\Model;

/**
 * @property string $kd_group_resource
 * @property string|null $nm_group_resource
 * @property-read mixed $nama
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Wawans\SismiopDatabase\Resource\ItemResource> $item
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GroupResource newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GroupResource newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GroupResource query()
 *
 * @mixin \Eloquent
 */
class GroupResource extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'kd_group_resource';

    /**
     * The "type" of the primary key ID.
     *
     * @var string
     */
    protected $keyType = 'int';

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'kd_group_resource',
        'nm_group_resource',
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
    protected $casts = [];

    public function item()
    {
        return $this->hasMany(ItemResource::class, 'kd_group_resource', 'kd_group_resource');
    }

    public function getNamaAttribute()
    {
        return $this->nm_group_resource;
    }
}
