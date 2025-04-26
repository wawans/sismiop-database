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
 * @property string|null $kd_jns_sin
 * @property string|null $nip_pendata
 * @property string|null $nip_perekam
 * @property string|null $tgl_pendataan
 * @property string|null $tgl_perekaman
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DatOpSin newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DatOpSin newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DatOpSin query()
 *
 * @mixin \Eloquent
 */
class DatOpSin extends Model
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
        'kd_jns_sin',
        'nip_pendata',
        'nip_perekam',
        'tgl_pendataan',
        'tgl_perekaman',
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
