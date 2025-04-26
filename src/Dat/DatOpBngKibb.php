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
 * @property string $no_bng
 * @property string $kd_pebin
 * @property string $kd_pbi
 * @property string $kd_ppbi
 * @property string $kd_upb
 * @property string $kd_kibb
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DatOpBngKibb newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DatOpBngKibb newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DatOpBngKibb query()
 *
 * @mixin \Eloquent
 */
class DatOpBngKibb extends Model
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
        'no_bng',
        'kd_pebin',
        'kd_pbi',
        'kd_ppbi',
        'kd_upb',
        'kd_kibb',
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
        'no_bng',
        'kd_pebin',
        'kd_pbi',
        'kd_ppbi',
        'kd_upb',
        'kd_kibb',
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
