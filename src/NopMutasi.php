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
 * @property string $indeks_mutasi
 * @property string|null $kd_propinsi_mutasi
 * @property string|null $kd_dati2_mutasi
 * @property string|null $kd_kecamatan_mutasi
 * @property string|null $kd_kelurahan_mutasi
 * @property string|null $kd_blok_mutasi
 * @property string|null $no_urut_mutasi
 * @property string|null $kd_jns_op_mutasi
 * @property string|null $luas_bumi_mutasi
 * @property string|null $tgl_rekam_nop_mutasi
 * @property string|null $nip_perekam_nop_mutasi
 * @property string|null $sys_nc00019$
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NopMutasi newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NopMutasi newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NopMutasi query()
 *
 * @mixin \Eloquent
 */
class NopMutasi extends Model
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
        'indeks_mutasi',
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
        'indeks_mutasi',
        'kd_propinsi_mutasi',
        'kd_dati2_mutasi',
        'kd_kecamatan_mutasi',
        'kd_kelurahan_mutasi',
        'kd_blok_mutasi',
        'no_urut_mutasi',
        'kd_jns_op_mutasi',
        'luas_bumi_mutasi',
        'tgl_rekam_nop_mutasi',
        'nip_perekam_nop_mutasi',
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
