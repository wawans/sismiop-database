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
 * @property string $tgl_transaksi
 * @property string|null $sumber_informasi
 * @property string|null $luas_bumi_transaksi
 * @property string|null $luas_bng_transaksi
 * @property string|null $kd_znt_transaksi
 * @property string|null $harga_bng_transaksi
 * @property string|null $harga_bumi_transaksi
 * @property string|null $harga_total_transaksi
 * @property string|null $tgl_rekam_transaksi
 * @property string|null $nip_perekam
 * @property string|null $sys_nc00018$
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DatTransaksiJualBeli newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DatTransaksiJualBeli newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DatTransaksiJualBeli query()
 *
 * @mixin \Eloquent
 */
class DatTransaksiJualBeli extends Model
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
        'tgl_transaksi',
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
        'tgl_transaksi',
        'sumber_informasi',
        'luas_bumi_transaksi',
        'luas_bng_transaksi',
        'kd_znt_transaksi',
        'harga_bng_transaksi',
        'harga_bumi_transaksi',
        'harga_total_transaksi',
        'tgl_rekam_transaksi',
        'nip_perekam',
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
