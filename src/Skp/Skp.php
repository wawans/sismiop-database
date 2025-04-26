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
 * @property string $thn_pajak_skp
 * @property string $tgl_terbit_skp
 * @property string|null $no_skp
 * @property string|null $siklus_skp
 * @property string|null $kd_kanwil_bank
 * @property string|null $kd_kppbb_bank
 * @property string|null $kd_bank_tunggal
 * @property string|null $kd_bank_persepsi
 * @property string|null $kd_tp
 * @property string|null $kd_kls_tanah
 * @property string|null $thn_awal_kls_tanah
 * @property string|null $kd_kls_bng
 * @property string|null $thn_awal_kls_bng
 * @property string|null $tgl_jatuh_tempo_skp
 * @property string|null $luas_bumi_skp
 * @property string|null $luas_bng_skp
 * @property string|null $njop_bumi_skp
 * @property string|null $njop_bng_skp
 * @property string|null $njop_skp
 * @property string|null $njoptkp_skp
 * @property string|null $njkp_skp
 * @property string|null $pbb_terhutang_skp
 * @property string|null $persen_pengenaan_skp
 * @property string|null $pengenaan_khusus_skp
 * @property string|null $pbb_yg_harus_dibayar_skp
 * @property string|null $pokok_harus_dibayar_skp
 * @property string|null $besar_denda_skp
 * @property string|null $pbb_msh_harus_dibayar_skp
 * @property string|null $status_pembayaran_skp
 * @property string|null $status_tagihan_skp
 * @property string|null $tgl_cetak_skp
 * @property string|null $nip_pencetak_skp
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Skp newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Skp newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Skp query()
 *
 * @mixin \Eloquent
 */
class Skp extends Model
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
