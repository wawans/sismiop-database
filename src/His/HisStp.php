<?php

namespace Wawans\SismiopDatabase\His;

use Wawans\SismiopDatabase\Model;

class HisStp extends Model
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
        'thn_pajak_stp',
        'indeks_perubahan_stp',
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
        'thn_pajak_stp',
        'indeks_perubahan_stp',
        'kd_kanwil',
        'kd_kppbb',
        'jns_sk',
        'no_sk',
        'his_kd_bank_tunggal',
        'his_kd_bank_persepsi',
        'his_kd_tp',
        'his_tgl_jatuh_tempo_stp',
        'his_tgl_terbit_stp',
        'his_sisa_pajak_terhutang_stp',
        'his_jml_lambat_bulan_denda_stp',
        'his_rupiah_denda_stp',
        'his_jml_pajak_terhutang_stp',
        'his_persetujuan_stp_kp_pbb',
        'his_kd_jns_ketetapan',
        'his_tgl_cetak_stp',
        'his_nip_pencetak_stp',
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
