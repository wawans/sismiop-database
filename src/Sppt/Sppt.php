<?php

namespace Wawans\SismiopDatabase\Sppt;

use Wawans\SismiopDatabase\Casts\StrPad;
use Wawans\SismiopDatabase\Concerns\WithDatObjekPajak;
use Wawans\SismiopDatabase\Concerns\WithRefDati2;
use Wawans\SismiopDatabase\Concerns\WithRefKecamatan;
use Wawans\SismiopDatabase\Concerns\WithRefKelurahan;
use Wawans\SismiopDatabase\Concerns\WithRefPropinsi;
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
