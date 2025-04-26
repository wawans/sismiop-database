<?php

namespace Wawans\SismiopDatabase\Volume;

use Wawans\SismiopDatabase\Model;

/**
 * @property string $kd_pekerjaan
 * @property string $kd_kegiatan
 * @property string $kd_group_resource
 * @property string $kd_resource
 * @property string|null $vol_resource
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|VolumeResource newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|VolumeResource newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|VolumeResource query()
 *
 * @mixin \Eloquent
 */
class VolumeResource extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'vol_resource';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = [
        'kd_pekerjaan',
        'kd_kegiatan',
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
        'kd_pekerjaan',
        'kd_kegiatan',
        'kd_group_resource',
        'kd_resource',
        'vol_resource',
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
}
