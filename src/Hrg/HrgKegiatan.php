<?php

namespace Wawans\SismiopDatabase\Hrg;

use Wawans\SismiopDatabase\Model;

/**
 * @property string $kd_propinsi
 * @property string $kd_dati2
 * @property string $thn_kegiatan
 * @property string $kd_jpb
 * @property string $tipe_bng
 * @property string $kd_bng_lantai
 * @property string $kd_pekerjaan
 * @property string $kd_kegiatan
 * @property string|null $hrg_kegiatan
 * @property string|null $sys_nc00010$
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|HrgKegiatan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|HrgKegiatan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|HrgKegiatan query()
 *
 * @mixin \Eloquent
 */
class HrgKegiatan extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = [
        'kd_propinsi',
        'kd_dati2',
        'thn_kegiatan',
        'kd_jpb',
        'tipe_bng',
        'kd_bng_lantai',
        'kd_pekerjaan',
        'kd_kegiatan',
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
        'thn_kegiatan',
        'kd_jpb',
        'tipe_bng',
        'kd_bng_lantai',
        'kd_pekerjaan',
        'kd_kegiatan',
        'hrg_kegiatan',
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
