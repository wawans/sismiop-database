<?php

namespace Wawans\SismiopDatabase\Skp;

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
 * @property string|null $siklus_skp_spop
 * @property string|null $kd_kanwil_bank
 * @property string|null $kd_kppbb_bank
 * @property string|null $kd_bank_tunggal
 * @property string|null $kd_bank_persepsi
 * @property string|null $kd_tp
 * @property string|null $nm_wp_skp_spop
 * @property string|null $jln_wp_skp_spop
 * @property string|null $blok_kav_no_wp_skp_spop
 * @property string|null $rw_wp_skp_spop
 * @property string|null $rt_wp_skp_spop
 * @property string|null $kelurahan_wp_skp_spop
 * @property string|null $kota_wp_skp_spop
 * @property string|null $kd_pos_wp_skp_spop
 * @property string|null $npwp_skp_spop
 * @property string|null $no_persil_skp_spop
 * @property string|null $kd_kls_tanah
 * @property string|null $thn_awal_kls_tanah
 * @property string|null $kd_kls_bng
 * @property string|null $thn_awal_kls_bng
 * @property string|null $tgl_jatuh_tempo_skp_spop
 * @property string|null $luas_bumi_skp_spop
 * @property string|null $luas_bng_skp_spop
 * @property string|null $njop_bumi_skp_spop
 * @property string|null $njop_bng_skp_spop
 * @property string|null $njop_skp_spop
 * @property string|null $njoptkp_skp_spop
 * @property string|null $njkp_skp_spop
 * @property string|null $pbb_terhutang_skp_spop
 * @property string|null $besar_denda_skp_spop
 * @property string|null $faktor_pengurang_skp_spop
 * @property string|null $pbb_yg_harus_dibayar_skp_spop
 * @property string|null $status_pembayaran_skp_spop
 * @property string|null $status_tagihan_skp_spop
 * @property string|null $tgl_terbit_skp_spop
 * @property string|null $tgl_cetak_skp_spop
 * @property string|null $nip_pencetak_skp_spop
 * @property string|null $sys_nc00046$
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SkpSpop newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SkpSpop newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SkpSpop query()
 *
 * @mixin \Eloquent
 */
class SkpSpop extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id';

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
    protected $fillable = [];

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
