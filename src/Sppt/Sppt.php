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
