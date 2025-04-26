<?php

namespace Wawans\SismiopDatabase\Volume;

use Wawans\SismiopDatabase\Model;

/**
 * @property string $kd_jpb
 * @property string $tipe_bng
 * @property string $kd_bng_lantai
 * @property string $kd_pekerjaan
 * @property string $kd_kegiatan
 * @property string|null $vol_kegiatan
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|VolumeKegiatan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|VolumeKegiatan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|VolumeKegiatan query()
 *
 * @mixin \Eloquent
 */
class VolumeKegiatan extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'vol_kegiatan';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = [
        'KD_JPB',
        'TIPE_BNG',
        'KD_BNG_LANTAI',
        'KD_PEKERJAAN',
        'KD_KEGIATAN',
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
        'KD_JPB',
        'TIPE_BNG',
        'KD_BNG_LANTAI',
        'KD_PEKERJAAN',
        'KD_KEGIATAN',
        'VOL_KEGIATAN',
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
