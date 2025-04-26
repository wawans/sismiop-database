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
 * @property string $thn_pajak_skp_kb
 * @property string $his_indeks_perubahan_skp_kb
 * @property string|null $his_siklus_skp_kb
 * @property string|null $kd_kanwil
 * @property string|null $kd_kppbb
 * @property string|null $jns_sk
 * @property string|null $no_sk
 * @property string|null $his_kd_bank_tunggal
 * @property string|null $his_kd_bank_persepsi
 * @property string|null $his_kd_tp
 * @property string|null $his_kd_kls_tanah
 * @property string|null $his_thn_awal_kls_tanah
 * @property string|null $his_kd_kls_bng
 * @property string|null $his_thn_awal_kls_bng
 * @property string|null $his_tgl_jatuh_tempo_skp_kb
 * @property string|null $his_luas_bumi_skp_kb
 * @property string|null $his_luas_bng_skp_kb
 * @property string|null $his_njop_bumi_skp_kb
 * @property string|null $his_njop_bng_skp_kb
 * @property string|null $his_njop_skp_kb
 * @property string|null $his_njoptkp_skp_kb
 * @property string|null $his_njkp_skp_kb
 * @property string|null $his_pbb_terhutang_skp_kb
 * @property string|null $his_besar_denda_skp_kb
 * @property string|null $his_faktor_pengurang_skp_kb
 * @property string|null $his_pbb_yg_harus_dibyr_skp_kb
 * @property string|null $his_pbb_sppt
 * @property string|null $his_selisih_pembayaran_skp_kb
 * @property string|null $his_status_pembayaran_skp_kb
 * @property string|null $his_tgl_terbit_skp_kb
 * @property string|null $his_tgl_cetak_skp_kb
 * @property string|null $his_nip_pencetak_skp_kb
 * @property string|null $sys_nc00041$
 * @property string|null $sys_nc00040$
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|HisSkpKurangBayar newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|HisSkpKurangBayar newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|HisSkpKurangBayar query()
 *
 * @mixin \Eloquent
 */
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
