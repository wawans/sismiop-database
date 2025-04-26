<?php

namespace Wawans\SismiopDatabase\Dat;

use Wawans\SismiopDatabase\Model;

/**
 * @property string $kd_propinsi
 * @property string $kd_dati2
 * @property string $kd_kecamatan
 * @property string $kd_kelurahan
 * @property string $kd_blok
 * @property string $no_urut
 * @property string $kd_jns_op
 * @property string $no_bumi
 * @property string $kd_pebin
 * @property string $kd_pbi
 * @property string $kd_ppbi
 * @property string $kd_upb
 * @property string $kd_kibt
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DatOpBumiKibt newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DatOpBumiKibt newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DatOpBumiKibt query()
 *
 * @mixin \Eloquent
 */
class DatOpBumiKibt extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = [
        'kd_propinsi',
        'kd_dati2',
        'kd_kecamatan',
        'kd_kelurahan',
        'kd_blok',
        'no_urut',
        'kd_jns_op',
        'no_bumi',
        'kd_pebin',
        'kd_pbi',
        'kd_ppbi',
        'kd_upb',
        'kd_kibt',
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
        'kd_kecamatan',
        'kd_kelurahan',
        'kd_blok',
        'no_urut',
        'kd_jns_op',
        'no_bumi',
        'kd_pebin',
        'kd_pbi',
        'kd_ppbi',
        'kd_upb',
        'kd_kibt',
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
