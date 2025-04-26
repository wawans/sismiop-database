<?php

namespace Wawans\SismiopDatabase\Hrg;

use Wawans\SismiopDatabase\Model;

/**
 * @property string $kd_propinsi
 * @property string $kd_dati2
 * @property string $thn_hrg_pekerjaan_jpb8
 * @property string $kd_pekerjaan
 * @property string $kd_kegiatan
 * @property string $lbr_bent_min_hrg_jpb8
 * @property string $lbr_bent_max_hrg_jpb8
 * @property string $ting_kolom_min_hrg_jpb8
 * @property string $ting_kolom_max_hrg_jpb8
 * @property string|null $hrg_kegiatan_jpb8
 * @property string|null $sys_nc00011$
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|HrgKegiatanJpb8 newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|HrgKegiatanJpb8 newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|HrgKegiatanJpb8 query()
 *
 * @mixin \Eloquent
 */
class HrgKegiatanJpb8 extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = [
        'kd_propinsi',
        'kd_dati2',
        'thn_hrg_pekerjaan_jpb8',
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
        'kd_propinsi',
        'kd_dati2',
        'thn_hrg_pekerjaan_jpb8',
        'kd_pekerjaan',
        'kd_kegiatan',
        'lbr_bent_min_hrg_jpb8',
        'lbr_bent_max_hrg_jpb8',
        'ting_kolom_min_hrg_jpb8',
        'ting_kolom_max_hrg_jpb8',
        'hrg_kegiatan_jpb8',
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
