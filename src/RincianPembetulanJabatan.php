<?php

namespace Wawans\SismiopDatabase;

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
 * @property string $no_urut_rinci_pembetulan
 * @property string|null $pbl_uraian
 * @property string|null $pbl_semula
 * @property string|null $pbl_menjadi
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RincianPembetulanJabatan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RincianPembetulanJabatan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RincianPembetulanJabatan query()
 *
 * @mixin \Eloquent
 */
class RincianPembetulanJabatan extends Model
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
        'no_urut_rinci_pembetulan',
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
        'no_urut_rinci_pembetulan',
        'pbl_uraian',
        'pbl_semula',
        'pbl_menjadi',
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
