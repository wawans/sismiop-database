<?php

namespace Wawans\SismiopDatabase;

use Wawans\SismiopDatabase\Model;

class Stp extends Model
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
        'tgl_terbit_stp',
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
        'tgl_terbit_stp',
        'no_stp',
        'kd_jns_ketetapan',
        'no_srt_ketetapan',
        'thn_pajak_ketetapan',
        'pbb_ketetapan_awal',
        'pengurangan_pbb',
        'pengurangan_denda_skp',
        'jml_pbb_telah_dibayar',
        'jml_pbb_kurang_bayar',
        'denda_stp',
        'pengurangan_denda_sppt',
        'pbb_yg_harus_dibayar_stp',
        'kd_kanwil_bank',
        'kd_kppbb_bank',
        'kd_bank_tunggal',
        'kd_bank_persepsi',
        'kd_tp',
        'tgl_jatuh_tempo_stp',
        'status_pembayaran_stp',
        'tgl_cetak_stp',
        'nip_pencetak_stp',
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
