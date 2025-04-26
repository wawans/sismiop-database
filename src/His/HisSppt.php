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
 * @property string $thn_pajak_sppt
 * @property string $his_siklus_sppt
 * @property string|null $his_nm_wp_sppt
 * @property string|null $his_jln_wp_sppt
 * @property string|null $his_blok_kav_no_wp_sppt
 * @property string|null $his_rw_wp_sppt
 * @property string|null $his_rt_wp_sppt
 * @property string|null $his_kelurahan_wp_sppt
 * @property string|null $his_kota_wp_sppt
 * @property string|null $his_kd_pos_wp_sppt
 * @property string|null $his_npwp_sppt
 * @property string|null $his_no_persil_sppt
 * @property string|null $his_tgl_jatuh_tempo_sppt
 * @property string|null $his_luas_bumi_sppt
 * @property string|null $his_luas_bng_sppt
 * @property string|null $his_njop_bumi_sppt
 * @property string|null $his_njop_bng_sppt
 * @property string|null $his_njop_sppt
 * @property string|null $his_njoptkp_sppt
 * @property string|null $his_njkp_sppt
 * @property string|null $his_pbb_terhutang_sppt
 * @property string|null $his_faktor_pengurang_sppt
 * @property string|null $his_pbb_yg_harus_dibayar_sppt
 * @property string|null $his_status_pembayaran_sppt
 * @property string|null $his_tgl_terbit_sppt
 * @property string|null $new_siklus_sppt
 * @property string|null $new_nm_wp_sppt
 * @property string|null $new_jln_wp_sppt
 * @property string|null $new_blok_kav_no_wp_sppt
 * @property string|null $new_rw_wp_sppt
 * @property string|null $new_rt_wp_sppt
 * @property string|null $new_kelurahan_wp_sppt
 * @property string|null $new_kota_wp_sppt
 * @property string|null $new_kd_pos_wp_sppt
 * @property string|null $new_npwp_sppt
 * @property string|null $new_no_persil_sppt
 * @property string|null $new_tgl_jatuh_tempo_sppt
 * @property string|null $new_luas_bumi_sppt
 * @property string|null $new_luas_bng_sppt
 * @property string|null $new_njop_bumi_sppt
 * @property string|null $new_njop_bng_sppt
 * @property string|null $new_njop_sppt
 * @property string|null $new_njoptkp_sppt
 * @property string|null $new_njkp_sppt
 * @property string|null $new_pbb_terhutang_sppt
 * @property string|null $new_faktor_pengurang_sppt
 * @property string|null $new_pbb_yg_harus_dibayar_sppt
 * @property string|null $new_status_pembayaran_sppt
 * @property string|null $new_tgl_terbit_sppt
 * @property string|null $new_nip_pencetak_sppt
 * @property string|null $his_tarif_sppt
 * @property string|null $new_tarif_sppt
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|HisSppt newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|HisSppt newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|HisSppt query()
 *
 * @mixin \Eloquent
 */
class HisSppt extends Model
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
        'his_siklus_sppt',
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
        'his_siklus_sppt',
        'his_nm_wp_sppt',
        'his_jln_wp_sppt',
        'his_blok_kav_no_wp_sppt',
        'his_rw_wp_sppt',
        'his_rt_wp_sppt',
        'his_kelurahan_wp_sppt',
        'his_kota_wp_sppt',
        'his_kd_pos_wp_sppt',
        'his_npwp_sppt',
        'his_no_persil_sppt',
        'his_tgl_jatuh_tempo_sppt',
        'his_luas_bumi_sppt',
        'his_luas_bng_sppt',
        'his_njop_bumi_sppt',
        'his_njop_bng_sppt',
        'his_njop_sppt',
        'his_njoptkp_sppt',
        'his_njkp_sppt',
        'his_pbb_terhutang_sppt',
        'his_faktor_pengurang_sppt',
        'his_pbb_yg_harus_dibayar_sppt',
        'his_status_pembayaran_sppt',
        'his_tgl_terbit_sppt',
        'new_siklus_sppt',
        'new_nm_wp_sppt',
        'new_jln_wp_sppt',
        'new_blok_kav_no_wp_sppt',
        'new_rw_wp_sppt',
        'new_rt_wp_sppt',
        'new_kelurahan_wp_sppt',
        'new_kota_wp_sppt',
        'new_kd_pos_wp_sppt',
        'new_npwp_sppt',
        'new_no_persil_sppt',
        'new_tgl_jatuh_tempo_sppt',
        'new_luas_bumi_sppt',
        'new_luas_bng_sppt',
        'new_njop_bumi_sppt',
        'new_njop_bng_sppt',
        'new_njop_sppt',
        'new_njoptkp_sppt',
        'new_njkp_sppt',
        'new_pbb_terhutang_sppt',
        'new_faktor_pengurang_sppt',
        'new_pbb_yg_harus_dibayar_sppt',
        'new_status_pembayaran_sppt',
        'new_tgl_terbit_sppt',
        'new_nip_pencetak_sppt',
        'his_tarif_sppt',
        'new_tarif_sppt',
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
