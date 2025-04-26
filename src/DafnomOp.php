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
 * @property string|null $jalan_op
 * @property string|null $blok_kav_no_op
 * @property string|null $rw_op
 * @property string|null $rt_op
 * @property string|null $jns_bumi
 * @property string|null $kd_jpb
 * @property string|null $kd_status_wp
 * @property string|null $kategori_op
 * @property string|null $keterangan
 * @property string|null $no_formulir
 * @property string|null $tgl_pembentukan
 * @property string|null $nip_pembentuk
 * @property string|null $tgl_pemutakhiran
 * @property string|null $nip_pemutakhir
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DafnomOp newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DafnomOp newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DafnomOp query()
 *
 * @mixin \Eloquent
 */
class DafnomOp extends Model
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
        'jalan_op',
        'blok_kav_no_op',
        'rw_op',
        'rt_op',
        'jns_bumi',
        'kd_jpb',
        'kd_status_wp',
        'kategori_op',
        'keterangan',
        'no_formulir',
        'tgl_pembentukan',
        'nip_pembentuk',
        'tgl_pemutakhiran',
        'nip_pemutakhir',
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
