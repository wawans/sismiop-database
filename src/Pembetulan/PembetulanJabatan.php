<?php

namespace Wawans\SismiopDatabase\Pembetulan;

use Wawans\SismiopDatabase\Model;

/**
 * @property string $kd_propinsi
 * @property string $kd_dati2
 * @property string $kd_kecamatan
 * @property string $kd_kelurahan
 * @property string $kd_blok
 * @property string $no_urut
 * @property string $kd_jns_op
 * @property string $thn_pembetulan
 * @property string $pembetulan_ke
 * @property string|null $jns_sk
 * @property string|null $no_sk
 * @property string|null $jns_surat_yg_dibetulkan
 * @property string|null $no_surat_yg_dibetulkan
 * @property string|null $tgl_surat_yg_dibetulkan
 * @property string|null $sys_nc00015$
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PembetulanJabatan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PembetulanJabatan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PembetulanJabatan query()
 *
 * @mixin \Eloquent
 */
class PembetulanJabatan extends Model
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
        'thn_pembetulan',
        'pembetulan_ke',
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
        'thn_pembetulan',
        'pembetulan_ke',
        'jns_sk',
        'no_sk',
        'jns_surat_yg_dibetulkan',
        'no_surat_yg_dibetulkan',
        'tgl_surat_yg_dibetulkan',
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
