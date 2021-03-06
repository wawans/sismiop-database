<?php

namespace Wawans\SismiopDatabase\Pst;

use Wawans\SismiopDatabase\Casts\StrFn;
use Wawans\SismiopDatabase\Casts\StrPad;
use Wawans\SismiopDatabase\Constants\Lookup;
use Wawans\SismiopDatabase\Dat\DatObjekPajak;
use Wawans\SismiopDatabase\Lookup\LookupItem;
use Wawans\SismiopDatabase\Model;
use Wawans\SismiopDatabase\Ref\RefJnsPelayanan;
use Wawans\SismiopDatabase\Ref\RefKecamatan;
use Wawans\SismiopDatabase\Ref\RefKelurahan;
use Wawans\SismiopDatabase\Ref\RefSeksi;
use Wawans\SismiopDatabase\Ref\RefSubSeksi;
use Wawans\SismiopDatabase\Sppt\Sppt;

/**
 * Wawans\SismiopDatabase\Pst\PstDetail
 *
 * @property string $KD_KANWIL
 * @property string $KD_KPPBB
 * @property string $THN_PELAYANAN
 * @property string $BUNDEL_PELAYANAN
 * @property string $NO_URUT_PELAYANAN
 * @property string $KD_PROPINSI_PEMOHON
 * @property string $KD_DATI2_PEMOHON
 * @property string $KD_KECAMATAN_PEMOHON
 * @property string $KD_KELURAHAN_PEMOHON
 * @property string $KD_BLOK_PEMOHON
 * @property string $NO_URUT_PEMOHON
 * @property string $KD_JNS_OP_PEMOHON
 * @property string $KD_JNS_PELAYANAN
 * @property string $THN_PAJAK_PERMOHONAN
 * @property string|null $NAMA_PENERIMA
 * @property string|null $CATATAN_PENYERAHAN
 * @property bool $STATUS_SELESAI
 * @property string $TGL_SELESAI
 * @property string $KD_SEKSI_BERKAS
 * @property string|null $TGL_PENYERAHAN
 * @property string|null $NIP_PENYERAH
 * @property string|null $KD_SUBSEKSI_BERKAS
 * @property StrPad $kd_kanwil
 * @property StrPad $kd_kppbb
 * @property StrPad $thn_pelayanan
 * @property StrPad $bundel_pelayanan
 * @property StrPad $no_urut_pelayanan
 * @property StrPad $kd_propinsi_pemohon
 * @property StrPad $kd_dati2_pemohon
 * @property StrPad $kd_kecamatan_pemohon
 * @property StrPad $kd_kelurahan_pemohon
 * @property StrPad $kd_blok_pemohon
 * @property StrPad $no_urut_pemohon
 * @property StrFn $nama_penerima
 * @property StrFn $catatan_penyerahan
 * @property-read DatObjekPajak $datObjekPajak
 * @property-read mixed $nop
 * @property-read \Wawans\SismiopDatabase\Pst\PstPermohonan $pstPermohonan
 * @property-read \Illuminate\Database\Eloquent\Collection|\Wawans\SismiopDatabase\Pst\PstPosisiBerkas[] $pstPosisiBerkas
 * @property-read RefJnsPelayanan $refJnsPelayanan
 * @property-read RefKecamatan $refKecamatan
 * @property-read RefKelurahan $refKelurahan
 * @property-read RefSeksi $refSeksi
 * @property-read LookupItem $refStatusBerkas
 * @property-read RefSubSeksi $refSubSeksi
 * @property-read Sppt $sppt
 * @property-read \Illuminate\Database\Eloquent\Collection|Sppt[] $sppts
 * @method static \Illuminate\Database\Eloquent\Builder|PstDetail newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PstDetail newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PstDetail query()
 * @method static \Illuminate\Database\Eloquent\Builder|PstDetail whereBelumPenyerahan()
 * @method static \Illuminate\Database\Eloquent\Builder|PstDetail whereSudahPenyerahan()
 * @mixin \Eloquent
 */
class PstDetail extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = ['kd_kanwil', 'kd_kppbb', 'thn_pelayanan', 'bundel_pelayanan', 'no_urut_pelayanan'];

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
        'kd_kanwil',
        'kd_kppbb',
        'thn_pelayanan',
        'bundel_pelayanan',
        'no_urut_pelayanan',
        'kd_propinsi_pemohon',
        'kd_dati2_pemohon',
        'kd_kecamatan_pemohon',
        'kd_kelurahan_pemohon',
        'kd_blok_pemohon',
        'no_urut_pemohon',
        'kd_jns_op_pemohon',
        'kd_jns_pelayanan',
        'thn_pajak_permohonan',
        'nama_penerima',
        'catatan_penyerahan',
        'status_selesai',
        'tgl_selesai',
        'kd_seksi_berkas',
        'tgl_penyerahan',
        'nip_penyerah',
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
        'kd_kanwil' => StrPad::class . ':2',
        'kd_kppbb' => StrPad::class . ':2',
        'thn_pelayanan' => StrPad::class . ':4',
        'bundel_pelayanan' => StrPad::class . ':4',
        'no_urut_pelayanan' => StrPad::class . ':3',
        'kd_propinsi_pemohon' => StrPad::class . ':2',
        'kd_dati2_pemohon' => StrPad::class . ':2',
        'kd_kecamatan_pemohon' => StrPad::class . ':3',
        'kd_kelurahan_pemohon' => StrPad::class . ':3',
        'kd_blok_pemohon' => StrPad::class . ':3',
        'no_urut_pemohon' => StrPad::class . ':4',
        'nama_penerima' => StrFn::class . ':strtoupper',
        'catatan_penyerahan' => StrFn::class . ':strtoupper',
        'tgl_selesai' => 'date',
        'tgl_penyerahan' => 'date',
    ];

    public function pstPermohonan()
    {
        return $this->belongsTo(PstPermohonan::class, $this->primaryKey, $this->primaryKey);
    }

    public function pstPosisiBerkas()
    {
        return $this->hasMany(PstPosisiBerkas::class, $this->primaryKey, $this->primaryKey);
    }

    public function datObjekPajak()
    {
        return $this->belongsTo(DatObjekPajak::class,
            ['kd_propinsi_pemohon', 'kd_dati2_pemohon', 'kd_kecamatan_pemohon', 'kd_kelurahan_pemohon', 'kd_blok_pemohon', 'no_urut_pemohon', 'kd_jns_op_pemohon'],
            ['kd_propinsi', 'kd_dati2', 'kd_kecamatan', 'kd_kelurahan', 'kd_blok', 'no_urut', 'kd_jns_op']);
    }

    public function refJnsPelayanan()
    {
        return $this->belongsTo(RefJnsPelayanan::class, 'kd_jns_pelayanan', 'kd_jns_pelayanan');
    }

    public function refKecamatan()
    {
        return $this->belongsTo(RefKecamatan::class,
            ['kd_propinsi_pemohon', 'kd_dati2_pemohon', 'kd_kecamatan_pemohon'],
            ['kd_propinsi', 'kd_dati2', 'kd_kecamatan',]);
    }

    public function refKelurahan()
    {
        return $this->belongsTo(RefKelurahan::class,
            ['kd_propinsi_pemohon', 'kd_dati2_pemohon', 'kd_kecamatan_pemohon', 'kd_kelurahan_pemohon'],
            ['kd_propinsi', 'kd_dati2', 'kd_kecamatan', 'kd_kelurahan',]);
    }

    public function refSeksi()
    {
        return $this->belongsTo(RefSeksi::class, 'kd_seksi_berkas', 'kd_seksi');
    }

    public function refSubSeksi()
    {
        return $this->belongsTo(RefSubSeksi::class,
            ['kd_seksi_berkas', 'kd_subseksi_berkas'],
            ['kd_seksi', 'kd_subseksi']
        );
    }

    public function refStatusBerkas()
    {
        return $this->belongsTo(LookupItem::class, 'status_selesai', 'kd_lookup_item')->whereGroup(Lookup::GROUP_STATUS_BERKAS_PST);
    }

    public function sppt()
    {
        return $this->belongsTo(Sppt::class,
            ['kd_propinsi_pemohon', 'kd_dati2_pemohon', 'kd_kecamatan_pemohon', 'kd_kelurahan_pemohon', 'kd_blok_pemohon', 'no_urut_pemohon', 'kd_jns_op_pemohon', 'thn_pajak_permohonan'],
            ['kd_propinsi', 'kd_dati2', 'kd_kecamatan', 'kd_kelurahan', 'kd_blok', 'no_urut', 'kd_jns_op', 'thn_pajak_sppt']);
    }

    public function sppts()
    {
        return $this->hasMany(Sppt::class,
            ['kd_propinsi', 'kd_dati2', 'kd_kecamatan', 'kd_kelurahan', 'kd_blok', 'no_urut', 'kd_jns_op'],
            ['kd_propinsi_pemohon', 'kd_dati2_pemohon', 'kd_kecamatan_pemohon', 'kd_kelurahan_pemohon', 'kd_blok_pemohon', 'no_urut_pemohon', 'kd_jns_op_pemohon']
        );
    }

    /**
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeWhereSudahPenyerahan($query)
    {
        return $query->where(function ($query) {
            /** @var \Illuminate\Database\Eloquent\Builder $query */
            $query->whereNotNull('tgl_penyerahan')->orWhereNotNull('nip_penyerah');
        });
    }

    /**
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeWhereBelumPenyerahan($query)
    {
        return $query->where(function ($query) {
            /** @var \Illuminate\Database\Eloquent\Builder $query */
            $query->whereNull('tgl_penyerahan')->whereNull('nip_penyerah');
        });
    }

    public function sudahPenyerahan()
    {
        return !blank($this->tgl_penyerahan) || !blank($this->nip_penyerah);
    }

    public function belumPenyerahan()
    {
        return blank($this->tgl_penyerahan) && blank($this->nip_penyerah);
    }

    public function getNopAttribute($value)
    {
        return $this->kd_propinsi_pemohon . '.' .
            $this->kd_dati2_pemohon . '.' .
            $this->kd_kecamatan_pemohon . '.' .
            $this->kd_kelurahan_pemohon . '.' .
            $this->kd_blok_pemohon . '-' .
            $this->no_urut_pemohon . '.' .
            $this->kd_jns_op_pemohon;
    }
}
