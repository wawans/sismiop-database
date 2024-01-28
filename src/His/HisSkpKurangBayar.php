<?php

namespace Wawans\SismiopDatabase\His;

use Wawans\SismiopDatabase\Model;

class HisSkpKurangBayar extends Model
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
        'thn_pajak_skp_kb',
        'his_indeks_perubahan_skp_kb',
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
        'thn_pajak_skp_kb',
        'his_indeks_perubahan_skp_kb',
        'his_siklus_skp_kb',
        'kd_kanwil',
        'kd_kppbb',
        'jns_sk',
        'no_sk',
        'his_kd_bank_tunggal',
        'his_kd_bank_persepsi',
        'his_kd_tp',
        'his_kd_kls_tanah',
        'his_thn_awal_kls_tanah',
        'his_kd_kls_bng',
        'his_thn_awal_kls_bng',
        'his_tgl_jatuh_tempo_skp_kb',
        'his_luas_bumi_skp_kb',
        'his_luas_bng_skp_kb',
        'his_njop_bumi_skp_kb',
        'his_njop_bng_skp_kb',
        'his_njop_skp_kb',
        'his_njoptkp_skp_kb',
        'his_njkp_skp_kb',
        'his_pbb_terhutang_skp_kb',
        'his_besar_denda_skp_kb',
        'his_faktor_pengurang_skp_kb',
        'his_pbb_yg_harus_dibyr_skp_kb',
        'his_pbb_sppt',
        'his_selisih_pembayaran_skp_kb',
        'his_status_pembayaran_skp_kb',
        'his_tgl_terbit_skp_kb',
        'his_tgl_cetak_skp_kb',
        'his_nip_pencetak_skp_kb',
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
