<?php

namespace Wawans\SismiopDatabase\Hrg;

use Wawans\SismiopDatabase\Model;

/**
 * @property string $kd_propinsi
 * @property string $kd_dati2
 * @property string $thn_hrg_satuan
 * @property string $kd_pekerjaan
 * @property string $kd_kegiatan
 * @property string|null $hrg_satuan
 * @property string|null $sys_nc00007$
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|HrgSatuan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|HrgSatuan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|HrgSatuan query()
 *
 * @mixin \Eloquent
 */
class HrgSatuan extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = [
        'kd_propinsi',
        'kd_dati2',
        'thn_hrg_satuan',
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
        'thn_hrg_satuan',
        'kd_pekerjaan',
        'kd_kegiatan',
        'hrg_satuan',
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
