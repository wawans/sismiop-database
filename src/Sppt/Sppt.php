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
 * @property string $kd_propinsi
 * @property string $kd_dati2
 * @property string $kd_kecamatan
 * @property string $kd_kelurahan
 * @property string $kd_blok
 * @property string $no_urut
 * @property string $kd_jns_op
 * @property string $thn_pajak_sppt
 * @property string $siklus_sppt
 * @property string $kd_kanwil_bank
 * @property string $kd_kppbb_bank
 * @property string $kd_bank_tunggal
 * @property string $kd_bank_persepsi
 * @property string $kd_tp
 * @property string $nm_wp_sppt
 * @property string $jln_wp_sppt
 * @property string|null $blok_kav_no_wp_sppt
 * @property string|null $rw_wp_sppt
 * @property string|null $rt_wp_sppt
 * @property string|null $kelurahan_wp_sppt
 * @property string|null $kota_wp_sppt
 * @property string|null $kd_pos_wp_sppt
 * @property string|null $npwp_sppt
 * @property string|null $no_persil_sppt
 * @property string $kd_kls_tanah
 * @property string $thn_awal_kls_tanah
 * @property string $kd_kls_bng
 * @property string $thn_awal_kls_bng
 * @property \Illuminate\Support\Carbon $tgl_jatuh_tempo_sppt
 * @property string $luas_bumi_sppt
 * @property string $luas_bng_sppt
 * @property string $njop_bumi_sppt
 * @property string $njop_bng_sppt
 * @property string $njop_sppt
 * @property string $njoptkp_sppt
 * @property string|null $njkp_sppt
 * @property string $pbb_terhutang_sppt
 * @property string|null $faktor_pengurang_sppt
 * @property string $pbb_yg_harus_dibayar_sppt
 * @property string $status_pembayaran_sppt
 * @property string $status_tagihan_sppt
 * @property string $status_cetak_sppt
 * @property \Illuminate\Support\Carbon $tgl_terbit_sppt
 * @property \Illuminate\Support\Carbon $tgl_cetak_sppt
 * @property string $nip_pencetak_sppt
 * @property string|null $tarif_sppt
 * @property-read \Wawans\SismiopDatabase\Dat\DatObjekPajak|null $datObjekPajak
 * @property-read \Illuminate\Database\Eloquent\Collection<int, PembayaranSppt> $pembayaranSppt
 * @property-read \Wawans\SismiopDatabase\Ref\RefDati2|null $refDati2
 * @property-read \Wawans\SismiopDatabase\Ref\RefKecamatan|null $refKecamatan
 * @property-read \Wawans\SismiopDatabase\Ref\RefKelurahan|null $refKelurahan
 * @property-read \Wawans\SismiopDatabase\Ref\RefPropinsi|null $refPropinsi
 * @property-read LookupItem|null $refStatusCetak
 * @property-read LookupItem|null $refStatusPembayaran
 * @property-read LookupItem|null $refStatusTagihan
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Sppt newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Sppt newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Sppt orderByTahun($order = 'asc')
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Sppt query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Sppt statusPembayaran($status = 1)
 *
 * @mixin \Eloquent
 */
class Sppt extends Model
{
    use WithDatObjekPajak;
    use WithRefDati2;
    use WithRefKecamatan;
    use WithRefKelurahan;
    use WithRefPropinsi;

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
        'kd_propinsi' => StrPad::class.':2',
        'kd_dati2' => StrPad::class.':2',
        'kd_kecamatan' => StrPad::class.':3',
        'kd_kelurahan' => StrPad::class.':3',
        'kd_blok' => StrPad::class.':3',
        'no_urut' => StrPad::class.':4',
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
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @param  mixed  $status
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeStatusPembayaran($query, $status = 1)
    {
        return $query->where('status_pembayaran_sppt', $status);
    }

    /**
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @param  mixed  $order
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeOrderByTahun($query, $order = 'asc')
    {
        return $query->orderBy('thn_pajak_sppt', $order);
    }
}
