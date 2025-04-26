<?php

namespace Wawans\SismiopDatabase\Resource;

use Wawans\SismiopDatabase\Model;

/**
 * @property string $kd_group_resource
 * @property string $kd_resource
 * @property string|null $nm_resource
 * @property string|null $satuan_resource
 * @property-read mixed $nama
 * @property-read \Wawans\SismiopDatabase\Resource\GroupResource $group
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ItemResource newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ItemResource newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ItemResource query()
 *
 * @mixin \Eloquent
 */
class ItemResource extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = [
        'kd_group_resource',
        'kd_resource',
    ];

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
        'kd_resource',
        'nm_resource',
        'satuan_resource',
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

    public function group()
    {
        return $this->belongsTo(GroupResource::class, 'kd_group_resource', 'kd_group_resource');
    }

    public function getNamaAttribute()
    {
        return $this->nm_resource;
    }
}
