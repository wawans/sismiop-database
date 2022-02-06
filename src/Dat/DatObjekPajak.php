<?php

namespace Wawans\SismiopDatabase\Dat;

use Wawans\SismiopDatabase\Casts\StrPad;
use Wawans\SismiopDatabase\Concerns\WithRefDati2;
use Wawans\SismiopDatabase\Concerns\WithRefKecamatan;
use Wawans\SismiopDatabase\Concerns\WithRefKelurahan;
use Wawans\SismiopDatabase\Concerns\WithRefPropinsi;
use Wawans\SismiopDatabase\Model;
use Wawans\SismiopDatabase\Sppt\Sppt;

class DatObjekPajak extends Model
{
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
        'subjek_pajak_id',
        'no_formulir_spop',
        'no_persil',
        'jalan_op',
        'blok_kav_no_op',
        'rw_op',
        'rt_op',
        'kd_status_cabang',
        'kd_status_wp',
        'total_luas_bumi',
        'total_luas_bng',
        'njop_bumi',
        'njop_bng',
        'status_peta_op',
        'jns_transaksi_op',
        'tgl_pendataan_op',
        'nip_pendata',
        'tgl_pemeriksaan_op',
        'nip_pemeriksa_op',
        'tgl_perekaman_op',
        'nip_perekam_op',
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
        'rw_op' => StrPad::class . ':2',
        'rt_op' => StrPad::class . ':3',
        'tgl_pendataan_op' => 'date',
        'tgl_pemeriksaan_op' => 'date',
        'tgl_perekaman_op' => 'datetime',
    ];

    public function datOpBangunan()
    {
        return $this->hasMany(DatOpBangunan::class, $this->primaryKey, $this->primaryKey);
    }

    public function datOpBumi()
    {
        return $this->hasOne(DatOpBumi::class, $this->primaryKey, $this->primaryKey);
    }

    public function datSubjekPajak()
    {
        return $this->belongsTo(DatSubjekPajak::class, 'subjek_pajak_id', 'subjek_pajak_id');
    }

    public function sppt()
    {
        return $this->hasMany(Sppt::class, $this->primaryKey, $this->primaryKey);
    }
}
