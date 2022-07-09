<?php

namespace Wawans\SismiopDatabase\Dat;

use Wawans\SismiopDatabase\Casts\StrPad;
use Wawans\SismiopDatabase\Concerns\WithDatObjekPajak;
use Wawans\SismiopDatabase\Concerns\WithRefDati2;
use Wawans\SismiopDatabase\Concerns\WithRefKecamatan;
use Wawans\SismiopDatabase\Concerns\WithRefKelurahan;
use Wawans\SismiopDatabase\Concerns\WithRefPropinsi;
use Wawans\SismiopDatabase\Constants\Lookup;
use Wawans\SismiopDatabase\Lookup\LookupItem;
use Wawans\SismiopDatabase\Model;
use Wawans\SismiopDatabase\Pegawai;
use Wawans\SismiopDatabase\Ref\RefJpb;

/**
 * Wawans\SismiopDatabase\Dat\DatOpBangunan
 *
 * @property string $KD_PROPINSI
 * @property string $KD_DATI2
 * @property string $KD_KECAMATAN
 * @property string $KD_KELURAHAN
 * @property string $KD_BLOK
 * @property string $NO_URUT
 * @property string $KD_JNS_OP
 * @property int $NO_BNG
 * @property string|null $KD_JPB
 * @property string|null $NO_FORMULIR_LSPOP
 * @property string|null $THN_DIBANGUN_BNG
 * @property string|null $THN_RENOVASI_BNG
 * @property int|null $LUAS_BNG
 * @property int|null $JML_LANTAI_BNG
 * @property string|null $KONDISI_BNG
 * @property string|null $JNS_KONSTRUKSI_BNG
 * @property string|null $JNS_ATAP_BNG
 * @property string|null $KD_DINDING
 * @property string|null $KD_LANTAI
 * @property string|null $KD_LANGIT_LANGIT
 * @property int|null $NILAI_SISTEM_BNG
 * @property string|null $JNS_TRANSAKSI_BNG
 * @property string|null $TGL_PENDATAAN_BNG
 * @property string|null $NIP_PENDATA_BNG
 * @property string|null $TGL_PEMERIKSAAN_BNG
 * @property string|null $NIP_PEMERIKSA_BNG
 * @property string|null $TGL_PEREKAMAN_BNG
 * @property string|null $NIP_PEREKAM_BNG
 * @property StrPad $kd_propinsi
 * @property StrPad $kd_dati2
 * @property StrPad $kd_kecamatan
 * @property StrPad $kd_kelurahan
 * @property StrPad $kd_blok
 * @property StrPad $no_urut
 * @property StrPad $kd_jpb
 * @property-read \Illuminate\Database\Eloquent\Collection|\Wawans\SismiopDatabase\Dat\DatFasilitasBangunan[] $datFasilitasBangunan
 * @property-read \Wawans\SismiopDatabase\Dat\DatObjekPajak $datObjekPajak
 * @property-read Pegawai $pegawaiPemeriksa
 * @property-read Pegawai $pegawaiPendata
 * @property-read Pegawai $pegawaiPerekam
 * @property-read \Wawans\SismiopDatabase\Ref\RefDati2 $refDati2
 * @property-read LookupItem $refJnsAtap
 * @property-read LookupItem $refJnsKonstruksi
 * @property-read RefJpb $refJpb
 * @property-read LookupItem $refKdDinding
 * @property-read LookupItem $refKdLangitLangit
 * @property-read LookupItem $refKdLantai
 * @property-read \Wawans\SismiopDatabase\Ref\RefKecamatan $refKecamatan
 * @property-read \Wawans\SismiopDatabase\Ref\RefKelurahan $refKelurahan
 * @property-read LookupItem $refKondisi
 * @property-read \Wawans\SismiopDatabase\Ref\RefPropinsi $refPropinsi
 * @method static \Illuminate\Database\Eloquent\Builder|DatOpBangunan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DatOpBangunan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DatOpBangunan query()
 * @mixin \Eloquent
 */
class DatOpBangunan extends Model
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
        'no_bng'
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
        'no_bng',
        'kd_jpb',
        'no_formulir_lspop',
        'thn_dibangun_bng',
        'thn_renovasi_bng',
        'luas_bng',
        'jml_lantai_bng',
        'kondisi_bng',
        'jns_konstruksi_bng',
        'jns_atap_bng',
        'kd_dinding',
        'kd_lantai',
        'kd_langit_langit',
        'nilai_sistem_bng',
        'jns_transaksi_bng',
        'tgl_pendataan_bng',
        'nip_pendata_bng',
        'tgl_pemeriksaan_bng',
        'nip_pemeriksa_bng',
        'tgl_perekaman_bng',
        'nip_perekam_bng',
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
        'kd_jpb' => StrPad::class . ':2',
        'tgl_pendataan_bng' => 'date',
        'tgl_pemeriksaan_bng' => 'date',
        'tgl_perekaman_bng' => 'datetime',
    ];

    /**
     * The relations to eager load on every query.
     *
     * @var array
     */
    protected $with = [
        'refJpb',
        'refKondisi',
        'refJnsKonstruksi',
        'refJnsAtap',
        'refKdDinding',
        'refKdLantai',
        'refKdLangitLangit',
        'datFasilitasBangunan',
        'pegawaiPendata',
        'pegawaiPemeriksa',
        'pegawaiPerekam',
    ];

    public function datFasilitasBangunan()
    {
        return $this->hasMany(DatFasilitasBangunan::class, $this->primaryKey, $this->primaryKey);
    }

    public function refJpb()
    {
        return $this->belongsTo(RefJpb::class, 'kd_jpb', 'kd_jpb');
    }

    public function refKondisi()
    {
        return $this->belongsTo(LookupItem::class, 'kondisi_bng', 'kd_lookup_item')->whereGroup(Lookup::GROUP_JNS_KONDISI_BNG);
    }

    public function refJnsKonstruksi()
    {
        return $this->belongsTo(LookupItem::class, 'jns_konstruksi_bng', 'kd_lookup_item')->whereGroup(Lookup::GROUP_JNS_KONSTRUKSI_BNG);
    }

    public function refJnsAtap()
    {
        return $this->belongsTo(LookupItem::class, 'jns_atap_bng', 'kd_lookup_item')->whereGroup(Lookup::GROUP_JNS_ATAP_BNG);
    }

    public function refKdDinding()
    {
        return $this->belongsTo(LookupItem::class, 'kd_dinding', 'kd_lookup_item')->whereGroup(Lookup::GROUP_JNS_DINDING_BNG);
    }

    public function refKdLantai()
    {
        return $this->belongsTo(LookupItem::class, 'kd_lantai', 'kd_lookup_item')->whereGroup(Lookup::GROUP_JNS_LANTAI_BNG);
    }

    public function refKdLangitLangit()
    {
        return $this->belongsTo(LookupItem::class, 'kd_langit_langit', 'kd_lookup_item')->whereGroup(Lookup::GROUP_JNS_LANGIT2_BNG);
    }

    public function pegawaiPendata()
    {
        return $this->belongsTo(Pegawai::class, 'nip_pendata_bng', 'nip');
    }

    public function pegawaiPemeriksa()
    {
        return $this->belongsTo(Pegawai::class, 'nip_pemeriksa_bng', 'nip');
    }

    public function pegawaiPerekam()
    {
        return $this->belongsTo(Pegawai::class, 'nip_perekam_bng', 'nip');
    }
}
