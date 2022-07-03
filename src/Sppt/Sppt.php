<?php

namespace Wawans\SismiopDatabase\Sppt;

use Wawans\SismiopDatabase\Casts\StrPad;
use Wawans\SismiopDatabase\Concerns\WithDatObjekPajak;
use Wawans\SismiopDatabase\Concerns\WithRefDati2;
use Wawans\SismiopDatabase\Concerns\WithRefKecamatan;
use Wawans\SismiopDatabase\Concerns\WithRefKelurahan;
use Wawans\SismiopDatabase\Concerns\WithRefPropinsi;
use Wawans\SismiopDatabase\Constants\Lookup;
use Wawans\SismiopDatabase\Lookup\LookupItem;
use Wawans\SismiopDatabase\Model;
use Wawans\SismiopDatabase\Pembayaran\PembayaranSppt;

/**
 * Wawans\SismiopDatabase\Sppt\Sppt
 *
 * @property string $KD_PROPINSI
 * @property string $KD_DATI2
 * @property string $KD_KECAMATAN
 * @property string $KD_KELURAHAN
 * @property string $KD_BLOK
 * @property string $NO_URUT
 * @property string $KD_JNS_OP
 * @property string $THN_PAJAK_SPPT
 * @property int $SIKLUS_SPPT
 * @property string $KD_KANWIL_BANK
 * @property string $KD_KPPBB_BANK
 * @property string $KD_BANK_TUNGGAL
 * @property string $KD_BANK_PERSEPSI
 * @property string $KD_TP
 * @property string $NM_WP_SPPT
 * @property string $JLN_WP_SPPT
 * @property string|null $BLOK_KAV_NO_WP_SPPT
 * @property string|null $RW_WP_SPPT
 * @property string|null $RT_WP_SPPT
 * @property string|null $KELURAHAN_WP_SPPT
 * @property string|null $KOTA_WP_SPPT
 * @property string|null $KD_POS_WP_SPPT
 * @property string|null $NPWP_SPPT
 * @property string|null $NO_PERSIL_SPPT
 * @property string $KD_KLS_TANAH
 * @property string $THN_AWAL_KLS_TANAH
 * @property string $KD_KLS_BNG
 * @property string $THN_AWAL_KLS_BNG
 * @property string $TGL_JATUH_TEMPO_SPPT
 * @property int $LUAS_BUMI_SPPT
 * @property int $LUAS_BNG_SPPT
 * @property int $NJOP_BUMI_SPPT
 * @property int $NJOP_BNG_SPPT
 * @property int $NJOP_SPPT
 * @property int $NJOPTKP_SPPT
 * @property string|null $NJKP_SPPT
 * @property int $PBB_TERHUTANG_SPPT
 * @property int|null $FAKTOR_PENGURANG_SPPT
 * @property int $PBB_YG_HARUS_DIBAYAR_SPPT
 * @property string $STATUS_PEMBAYARAN_SPPT
 * @property string $STATUS_TAGIHAN_SPPT
 * @property string $STATUS_CETAK_SPPT
 * @property string $TGL_TERBIT_SPPT
 * @property string $TGL_CETAK_SPPT
 * @property string $NIP_PENCETAK_SPPT
 * @property StrPad $kd_propinsi
 * @property StrPad $kd_dati2
 * @property StrPad $kd_kecamatan
 * @property StrPad $kd_kelurahan
 * @property StrPad $kd_blok
 * @property StrPad $no_urut
 * @property-read \Wawans\SismiopDatabase\Dat\DatObjekPajak $datObjekPajak
 * @property-read \Illuminate\Database\Eloquent\Collection|PembayaranSppt[] $pembayaranSppt
 * @property-read \Wawans\SismiopDatabase\Ref\RefDati2 $refDati2
 * @property-read \Wawans\SismiopDatabase\Ref\RefKecamatan $refKecamatan
 * @property-read \Wawans\SismiopDatabase\Ref\RefKelurahan $refKelurahan
 * @property-read \Wawans\SismiopDatabase\Ref\RefPropinsi $refPropinsi
 * @property-read LookupItem $refStatusCetak
 * @property-read LookupItem $refStatusPembayaran
 * @property-read LookupItem $refStatusTagihan
 * @method static \Illuminate\Database\Eloquent\Builder|Sppt newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Sppt newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Sppt orderByTahun($order = 'asc')
 * @method static \Illuminate\Database\Eloquent\Builder|Sppt query()
 * @method static \Illuminate\Database\Eloquent\Builder|Sppt statusPembayaran($status = 1)
 * @mixin \Eloquent
 */
class Sppt extends Model
{
    use WithDatObjekPajak;
    use WithRefPropinsi;
    use WithRefDati2;
    use WithRefKecamatan;
    use WithRefKelurahan;

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
        'thn_pajak_sppt'
    ];

    /**
     * The "type" of the primary key ID.
     *
     * @var string
     */
    protected $keyType = 'string';

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
        'siklus_sppt',
        'kd_kanwil_bank',
        'kd_kppbb_bank',
        'kd_bank_tunggal',
        'kd_bank_persepsi',
        'kd_tp',
        'nm_wp_sppt',
        'jln_wp_sppt',
        'blok_kav_no_wp_sppt',
        'rw_wp_sppt',
        'rt_wp_sppt',
        'kelurahan_wp_sppt',
        'kota_wp_sppt',
        'kd_pos_wp_sppt',
        'npwp_sppt',
        'no_persil_sppt',
        'kd_kls_tanah',
        'thn_awal_kls_tanah',
        'kd_kls_bng',
        'thn_awal_kls_bng',
        'tgl_jatuh_tempo_sppt',
        'luas_bumi_sppt',
        'luas_bng_sppt',
        'njop_bumi_sppt',
        'njop_bng_sppt',
        'njop_sppt',
        'njoptkp_sppt',
        'njkp_sppt',
        'pbb_terhutang_sppt',
        'faktor_pengurang_sppt',
        'pbb_yg_harus_dibayar_sppt',
        'status_pembayaran_sppt',
        'status_tagihan_sppt',
        'status_cetak_sppt',
        'tgl_terbit_sppt',
        'tgl_cetak_sppt',
        'nip_pencetak_sppt',
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
    protected $casts = [
        'kd_propinsi' => StrPad::class . ':2',
        'kd_dati2' => StrPad::class . ':2',
        'kd_kecamatan' => StrPad::class . ':3',
        'kd_kelurahan' => StrPad::class . ':3',
        'kd_blok' => StrPad::class . ':3',
        'no_urut' => StrPad::class . ':4',
        'tgl_jatuh_tempo_sppt' => 'date',
        'tgl_terbit_sppt' => 'date',
        'tgl_cetak_sppt' => 'datetime',
    ];

    public function pembayaranSppt()
    {
        return $this->hasMany(PembayaranSppt::class, $this->primaryKey, $this->primaryKey);
    }

    public function refStatusTagihan()
    {
        return $this->belongsTo(LookupItem::class, 'status_tagihan_sppt', 'kd_lookup_item')->whereGroup(Lookup::GROUP_STATUS_TAGIHAN_SPPT);
    }

    public function refStatusPembayaran()
    {
        return $this->belongsTo(LookupItem::class, 'status_pembayaran_sppt', 'kd_lookup_item')->whereGroup(Lookup::GROUP_STATUS_PEMBAYARAN_SPPT);
    }

    public function refStatusCetak()
    {
        return $this->belongsTo(LookupItem::class, 'status_cetak_sppt', 'kd_lookup_item')->whereGroup(Lookup::GROUP_STATUS_CETAK_SPPT);
    }

    /**
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param mixed $status
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeStatusPembayaran($query, $status = 1)
    {
        return $query->where('status_pembayaran_sppt', $status);
    }

    /**
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param mixed $order
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeOrderByTahun($query, $order = 'asc')
    {
        return $query->orderBy('thn_pajak_sppt', $order);
    }
}
