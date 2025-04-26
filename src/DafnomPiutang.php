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
 * @property string $thn_pajak_sppt
 * @property string|null $nm_wp_sppt
 * @property string|null $jln_wp_sppt
 * @property string|null $blok_kav_no_wp_sppt
 * @property string|null $rw_wp_sppt
 * @property string|null $rt_wp_sppt
 * @property string|null $kelurahan_wp_sppt
 * @property string|null $kota_wp_sppt
 * @property string|null $luas_bumi_sppt
 * @property string|null $luas_bng_sppt
 * @property string|null $njop_bumi_sppt
 * @property string|null $njop_bng_sppt
 * @property string|null $pbb_yg_harus_dibayar_sppt
 * @property string|null $tgl_jatuh_tempo_sppt
 * @property string|null $status_bayar
 * @property string|null $keterangan
 * @property string|null $no_formulir
 * @property string|null $tgl_pembentukan
 * @property string|null $nip_pembentuk
 * @property string|null $tgl_pemutakhiran
 * @property string|null $nip_pemutakhir
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DafnomPiutang newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DafnomPiutang newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DafnomPiutang query()
 *
 * @mixin \Eloquent
 */
class DafnomPiutang extends Model
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
        'thn_pajak_sppt',
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
        'thn_pajak_sppt',
        'nm_wp_sppt',
        'jln_wp_sppt',
        'blok_kav_no_wp_sppt',
        'rw_wp_sppt',
        'rt_wp_sppt',
        'kelurahan_wp_sppt',
        'kota_wp_sppt',
        'luas_bumi_sppt',
        'luas_bng_sppt',
        'njop_bumi_sppt',
        'njop_bng_sppt',
        'pbb_yg_harus_dibayar_sppt',
        'tgl_jatuh_tempo_sppt',
        'status_bayar',
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
