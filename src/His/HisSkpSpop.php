<?php

namespace Wawans\SismiopDatabase\His;

use Wawans\SismiopDatabase\Model;

/**
 * @property string $kd_propinsi
 * @property string $kd_dati2
 * @property string $kd_kecamatan
 * @property string $kd_kelurahan
 * @property string $kd_blok
 * @property string $no_urut
 * @property string $kd_jns_op
 * @property string $thn_pajak_skp_spop
 * @property string $his_indeks_perubahan_skp_spop
 * @property string|null $his_siklus_skp_spop
 * @property string|null $kd_kanwil
 * @property string|null $kd_kppbb
 * @property string|null $jns_sk
 * @property string|null $no_sk
 * @property string|null $his_kd_bank_tunggal
 * @property string|null $his_kd_bank_persepsi
 * @property string|null $his_kd_tp
 * @property string|null $his_nm_wp_skp_spop
 * @property string|null $his_jln_wp_skp_spop
 * @property string|null $his_blok_kav_no_wp_skp_spop
 * @property string|null $his_rw_wp_skp_spop
 * @property string|null $his_rt_wp_skp_spop
 * @property string|null $his_kelurahan_wp_skp_spop
 * @property string|null $his_kota_wp_skp_spop
 * @property string|null $his_kd_pos_wp_skp_spop
 * @property string|null $his_npwp_skp_spop
 * @property string|null $his_no_persil_skp_spop
 * @property string|null $his_kd_kls_tanah
 * @property string|null $his_thn_awal_kls_tanah
 * @property string|null $his_kd_kls_bng
 * @property string|null $his_thn_awal_kls_bng
 * @property string|null $his_tgl_jatuh_tempo_skp_spop
 * @property string|null $his_luas_bumi_skp_spop
 * @property string|null $his_luas_bng_skp_spop
 * @property string|null $his_njop_bumi_skp_spop
 * @property string|null $his_njop_bng_skp_spop
 * @property string|null $his_njop_skp_spop
 * @property string|null $his_njoptkp_skp_spop
 * @property string|null $his_njkp_skp_spop
 * @property string|null $his_pbb_terhutang_skp_spop
 * @property string|null $his_besar_denda_skp_spop
 * @property string|null $his_faktor_pengurang_skp_spop
 * @property string|null $his_pbb_yg_harus_dibyr_skpspop
 * @property string|null $his_status_pembayaran_skp_spop
 * @property string|null $his_status_tagihan_skp_spop
 * @property string|null $his_tgl_terbit_skp_spop
 * @property string|null $his_tgl_cetak_skp_spop
 * @property string|null $his_nip_cetak_skp_spop
 * @property string|null $sys_nc00049$
 * @property string|null $sys_nc00050$
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|HisSkpSpop newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|HisSkpSpop newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|HisSkpSpop query()
 *
 * @mixin \Eloquent
 */
class HisSkpSpop extends Model
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
        'thn_pajak_skp_spop',
        'his_indeks_perubahan_skp_spop',
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
        'thn_pajak_skp_spop',
        'his_indeks_perubahan_skp_spop',
        'his_siklus_skp_spop',
        'kd_kanwil',
        'kd_kppbb',
        'jns_sk',
        'no_sk',
        'his_kd_bank_tunggal',
        'his_kd_bank_persepsi',
        'his_kd_tp',
        'his_nm_wp_skp_spop',
        'his_jln_wp_skp_spop',
        'his_blok_kav_no_wp_skp_spop',
        'his_rw_wp_skp_spop',
        'his_rt_wp_skp_spop',
        'his_kelurahan_wp_skp_spop',
        'his_kota_wp_skp_spop',
        'his_kd_pos_wp_skp_spop',
        'his_npwp_skp_spop',
        'his_no_persil_skp_spop',
        'his_kd_kls_tanah',
        'his_thn_awal_kls_tanah',
        'his_kd_kls_bng',
        'his_thn_awal_kls_bng',
        'his_tgl_jatuh_tempo_skp_spop',
        'his_luas_bumi_skp_spop',
        'his_luas_bng_skp_spop',
        'his_njop_bumi_skp_spop',
        'his_njop_bng_skp_spop',
        'his_njop_skp_spop',
        'his_njoptkp_skp_spop',
        'his_njkp_skp_spop',
        'his_pbb_terhutang_skp_spop',
        'his_besar_denda_skp_spop',
        'his_faktor_pengurang_skp_spop',
        'his_pbb_yg_harus_dibyr_skpspop',
        'his_status_pembayaran_skp_spop',
        'his_status_tagihan_skp_spop',
        'his_tgl_terbit_skp_spop',
        'his_tgl_cetak_skp_spop',
        'his_nip_cetak_skp_spop',
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
