<?php

namespace Wawans\SismiopDatabase\Dat;

use Wawans\SismiopDatabase\Casts\StrPad;
use Wawans\SismiopDatabase\Concerns\WithDatObjekPajak;
use Wawans\SismiopDatabase\Concerns\WithDatOpBangunan;
use Wawans\SismiopDatabase\Concerns\WithRefDati2;
use Wawans\SismiopDatabase\Concerns\WithRefKecamatan;
use Wawans\SismiopDatabase\Concerns\WithRefKelurahan;
use Wawans\SismiopDatabase\Concerns\WithRefPropinsi;
use Wawans\SismiopDatabase\Model;
use Wawans\SismiopDatabase\Pegawai;

/**
 * Wawans\SismiopDatabase\Dat\DatNilaiIndividu
 *
 * @property string $KD_PROPINSI
 * @property string $KD_DATI2
 * @property string $KD_KECAMATAN
 * @property string $KD_KELURAHAN
 * @property string $KD_BLOK
 * @property string $NO_URUT
 * @property string $KD_JNS_OP
 * @property int $NO_BNG
 * @property string|null $NO_FORMULIR_INDIVIDU
 * @property int|null $NILAI_INDIVIDU
 * @property string|null $TGL_PENILAIAN_INDIVIDU
 * @property string|null $NIP_PENILAI_INDIVIDU
 * @property string|null $TGL_PEMERIKSAAN_INDIVIDU
 * @property string|null $NIP_PEMERIKSA_INDIVIDU
 * @property string|null $TGL_REKAM_NILAI_INDIVIDU
 * @property string|null $NIP_PEREKAM_INDIVIDU
 * @property StrPad $kd_propinsi
 * @property StrPad $kd_dati2
 * @property StrPad $kd_kecamatan
 * @property StrPad $kd_kelurahan
 * @property StrPad $kd_blok
 * @property StrPad $no_urut
 * @property-read \Wawans\SismiopDatabase\Dat\DatObjekPajak $datObjekPajak
 * @property-read \Wawans\SismiopDatabase\Dat\DatOpBangunan $datOpBangunan
 * @property-read Pegawai $pegawaiPemeriksa
 * @property-read Pegawai $pegawaiPenilai
 * @property-read Pegawai $pegawaiPerekam
 * @property-read \Wawans\SismiopDatabase\Ref\RefDati2 $refDati2
 * @property-read \Wawans\SismiopDatabase\Ref\RefKecamatan $refKecamatan
 * @property-read \Wawans\SismiopDatabase\Ref\RefKelurahan $refKelurahan
 * @property-read \Wawans\SismiopDatabase\Ref\RefPropinsi $refPropinsi
 * @method static \Illuminate\Database\Eloquent\Builder|DatNilaiIndividu newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DatNilaiIndividu newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DatNilaiIndividu query()
 * @mixin \Eloquent
 */
class DatNilaiIndividu extends Model
{
    use WithDatObjekPajak;
    use WithDatOpBangunan;
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
        'no_formulir_individu',
        'nilai_individu',
        'tgl_penilaian_individu',
        'nip_penilai_individu',
        'tgl_pemeriksaan_individu',
        'nip_pemeriksa_individu',
        'tgl_rekam_nilai_individu',
        'nip_perekam_individu',
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
        'tgl_penilaian_individu' => 'date',
        'tgl_pemeriksaan_individu' => 'date',
        'tgl_rekam_nilai_individu' => 'datetime',
    ];

    public function pegawaiPenilai()
    {
        return $this->belongsTo(Pegawai::class, 'nip_penilai_individu', 'nip');
    }

    public function pegawaiPemeriksa()
    {
        return $this->belongsTo(Pegawai::class, 'nip_pemeriksa_individu', 'nip');
    }

    public function pegawaiPerekam()
    {
        return $this->belongsTo(Pegawai::class, 'nip_perekam_individu', 'nip');
    }
}
