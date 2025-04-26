<?php

namespace Wawans\SismiopDatabase\Volume;

use Wawans\SismiopDatabase\Model;

/**
 * @property string $kd_pekerjaan
 * @property string $kd_kegiatan
 * @property string $lbr_bent_min_hrg_jpb8
 * @property string $lbr_bent_max_hrg_jpb8
 * @property string $ting_kolom_min_hrg_jpb8
 * @property string $ting_kolom_max_hrg_jpb8
 * @property string|null $vol_kegiatan_jpb8
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|VolumeKegiatanJpb8 newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|VolumeKegiatanJpb8 newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|VolumeKegiatanJpb8 query()
 *
 * @mixin \Eloquent
 */
class VolumeKegiatanJpb8 extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'vol_kegiatan_jpb8';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = [
        'kd_pekerjaan',
        'kd_kegiatan',
        'lbr_bent_min_hrg_jpb8',
        'lbr_bent_max_hrg_jpb8',
        'ting_kolom_min_hrg_jpb8',
        'ting_kolom_max_hrg_jpb8',
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
        'lbr_bent_min_hrg_jpb8',
        'lbr_bent_max_hrg_jpb8',
        'ting_kolom_min_hrg_jpb8',
        'ting_kolom_max_hrg_jpb8',
        'vol_kegiatan_jpb8',
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
