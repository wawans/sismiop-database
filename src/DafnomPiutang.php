<?php

namespace Wawans\SismiopDatabase;

use Wawans\SismiopDatabase\Model;

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
