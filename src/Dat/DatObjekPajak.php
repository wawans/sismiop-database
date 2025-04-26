<?php

namespace Wawans\SismiopDatabase\Dat;

use Wawans\SismiopDatabase\Casts\StrPad;
use Wawans\SismiopDatabase\Concerns\WithRefDati2;
use Wawans\SismiopDatabase\Concerns\WithRefKecamatan;
use Wawans\SismiopDatabase\Concerns\WithRefKelurahan;
use Wawans\SismiopDatabase\Concerns\WithRefPropinsi;
use Wawans\SismiopDatabase\Constants\Lookup;
use Wawans\SismiopDatabase\Lookup\LookupItem;
use Wawans\SismiopDatabase\Model;
use Wawans\SismiopDatabase\Pegawai;
use Wawans\SismiopDatabase\Sppt\Sppt;

/**
 * Wawans\SismiopDatabase\Dat\DatObjekPajak
 *
 * @property string $kd_propinsi
 * @property string $kd_dati2
 * @property string $kd_kecamatan
 * @property string $kd_kelurahan
 * @property string $kd_blok
 * @property string $no_urut
 * @property string $kd_jns_op
 * @property string|null $subjek_pajak_id
 * @property string|null $no_formulir_spop
 * @property string|null $no_persil
 * @property string|null $jalan_op
 * @property string|null $blok_kav_no_op
 * @property string|null $rw_op
 * @property string|null $rt_op
 * @property string|null $kd_status_cabang
 * @property string|null $kd_status_wp
 * @property string|null $total_luas_bumi
 * @property string|null $total_luas_bng
 * @property string|null $njop_bumi
 * @property string|null $njop_bng
 * @property string|null $status_peta_op
 * @property string|null $jns_transaksi_op
 * @property \Illuminate\Support\Carbon|null $tgl_pendataan_op
 * @property string|null $nip_pendata
 * @property \Illuminate\Support\Carbon|null $tgl_pemeriksaan_op
 * @property string|null $nip_pemeriksa_op
 * @property \Illuminate\Support\Carbon|null $tgl_perekaman_op
 * @property string|null $nip_perekam_op
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Wawans\SismiopDatabase\Dat\DatOpBangunan> $datOpBangunan
 * @property-read \Wawans\SismiopDatabase\Dat\DatOpBumi|null $datOpBumi
 * @property-read \Wawans\SismiopDatabase\Dat\DatPetaBlok $datPetaBlok
 * @property-read \Wawans\SismiopDatabase\Dat\DatSubjekPajak|null $datSubjekPajak
 * @property-read mixed $jalan_blok_kav_no_op
 * @property-read Pegawai|null $pegawaiPemeriksa
 * @property-read Pegawai|null $pegawaiPendata
 * @property-read Pegawai|null $pegawaiPerekam
 * @property-read \Wawans\SismiopDatabase\Ref\RefDati2 $refDati2
 * @property-read LookupItem|null $refJnsTransaksi
 * @property-read LookupItem|null $refKdStatusCabang
 * @property-read LookupItem|null $refKdStatusWp
 * @property-read \Wawans\SismiopDatabase\Ref\RefKecamatan $refKecamatan
 * @property-read \Wawans\SismiopDatabase\Ref\RefKelurahan $refKelurahan
 * @property-read \Wawans\SismiopDatabase\Ref\RefPropinsi $refPropinsi
 * @property-read LookupItem|null $refStatusPeta
 * @property-read \Illuminate\Database\Eloquent\Collection<int, Sppt> $sppt
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DatObjekPajak newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DatObjekPajak newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DatObjekPajak query()
 *
 * @mixin \Eloquent
 */
class DatObjekPajak extends Model
{
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
        'kd_propinsi' => StrPad::class.':2',
        'kd_dati2' => StrPad::class.':2',
        'kd_kecamatan' => StrPad::class.':3',
        'kd_kelurahan' => StrPad::class.':3',
        'kd_blok' => StrPad::class.':3',
        'no_urut' => StrPad::class.':4',
        'rw_op' => StrPad::class.':2',
        'rt_op' => StrPad::class.':3',
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

    public function datPetaBlok()
    {
        return $this->belongsTo(DatPetaBlok::class,
            ['kd_propinsi', 'kd_dati2', 'kd_kecamatan', 'kd_kelurahan', 'kd_blok'],
            ['kd_propinsi', 'kd_dati2', 'kd_kecamatan', 'kd_kelurahan', 'kd_blok']);
    }

    public function datSubjekPajak()
    {
        return $this->belongsTo(DatSubjekPajak::class, 'subjek_pajak_id', 'subjek_pajak_id');
    }

    public function sppt()
    {
        return $this->hasMany(Sppt::class, $this->primaryKey, $this->primaryKey);
    }

    public function refJnsTransaksi()
    {
        return $this->belongsTo(LookupItem::class, 'jns_transaksi_op', 'kd_lookup_item')->whereGroup(Lookup::GROUP_JNS_TRANSAKSI);
    }

    public function refKdStatusCabang()
    {
        return $this->belongsTo(LookupItem::class, 'kd_status_cabang', 'kd_lookup_item')->whereGroup(Lookup::GROUP_STATUS_CABANG_OP);
    }

    public function refKdStatusWp()
    {
        return $this->belongsTo(LookupItem::class, 'kd_status_wp', 'kd_lookup_item')->whereGroup(Lookup::GROUP_STATUS_WP_OP);
    }

    public function refStatusPeta()
    {
        return $this->belongsTo(LookupItem::class, 'status_peta_op', 'kd_lookup_item')->whereGroup(Lookup::GROUP_STATUS_PETA_OP);
    }

    public function pegawaiPendata()
    {
        return $this->belongsTo(Pegawai::class, 'nip_pendata', 'nip');
    }

    public function pegawaiPemeriksa()
    {
        return $this->belongsTo(Pegawai::class, 'nip_pemeriksa_op', 'nip');
    }

    public function pegawaiPerekam()
    {
        return $this->belongsTo(Pegawai::class, 'nip_perekam_op', 'nip');
    }

    public function getJalanBlokKavNoOpAttribute($value)
    {
        return $this->jalan_op.' '.$this->blok_kav_no_op;
    }
}
