<?php

namespace Wawans\SismiopDatabase\Sppt;

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
 * @property string|null $siklus_sppt
 * @property string|null $kd_kanwil_bank
 * @property string|null $kd_kppbb_bank
 * @property string|null $kd_bank_tunggal
 * @property string|null $kd_bank_persepsi
 * @property string|null $kd_tp
 * @property string|null $nm_wp_sppt
 * @property string|null $jln_wp_sppt
 * @property string|null $blok_kav_no_wp_sppt
 * @property string|null $rw_wp_sppt
 * @property string|null $rt_wp_sppt
 * @property string|null $kelurahan_wp_sppt
 * @property string|null $kota_wp_sppt
 * @property string|null $kd_pos_wp_sppt
 * @property string|null $npwp_sppt
 * @property string|null $no_persil_sppt
 * @property string|null $kd_kls_tanah
 * @property string|null $thn_awal_kls_tanah
 * @property string|null $kd_kls_bng
 * @property string|null $thn_awal_kls_bng
 * @property string|null $tgl_jatuh_tempo_sppt
 * @property string|null $luas_bumi_sppt
 * @property string|null $luas_bng_sppt
 * @property string|null $njop_bumi_sppt
 * @property string|null $njop_bng_sppt
 * @property string|null $njop_sppt
 * @property string|null $njoptkp_sppt
 * @property string|null $njkp_sppt
 * @property string|null $pbb_terhutang_sppt
 * @property string|null $faktor_pengurang_sppt
 * @property string|null $pbb_yg_harus_dibayar_sppt
 * @property string|null $status_pembayaran_sppt
 * @property string|null $status_tagihan_sppt
 * @property string|null $status_cetak_sppt
 * @property string|null $tgl_terbit_sppt
 * @property string|null $tgl_cetak_sppt
 * @property string|null $nip_pencetak_sppt
 * @property string|null $tarif_sppt
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SpptSimulasi newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SpptSimulasi newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SpptSimulasi query()
 *
 * @mixin \Eloquent
 */
class SpptSimulasi extends Model
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
