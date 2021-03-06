<?php

namespace Wawans\SismiopDatabase\Pst;

use Illuminate\Support\Facades\DB;
use Wawans\SismiopDatabase\Casts\StrPad;
use Wawans\SismiopDatabase\Constants\Lookup;
use Wawans\SismiopDatabase\Dat\DatObjekPajak;
use Wawans\SismiopDatabase\Lookup\LookupItem;
use Wawans\SismiopDatabase\Model;
use Wawans\SismiopDatabase\Pegawai;
use Wawans\SismiopDatabase\Ref\RefSeksi;
use Wawans\SismiopDatabase\Ref\RefSubSeksi;

/**
 * Wawans\SismiopDatabase\Pst\PstPosisiBerkas
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
 * @property int $NO_URUT_POSISI_BERKAS
 * @property string|null $CATATAN_POSISI_BERKAS
 * @property string $KD_SEKSI_BERKAS
 * @property string $KD_SUBSEKSI_BERKAS
 * @property string $STATUS_SELESAI
 * @property string $STATUS_POSISI_BERKAS
 * @property string $AKHIR_POSISI_BERKAS
 * @property string $TGL_POSISI_BERKAS
 * @property string $NIP_POSISI_BERKAS
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
 * @property-read DatObjekPajak $datObjekPajak
 * @property-read mixed $nop
 * @property-read Pegawai $pegawai
 * @property-read \Wawans\SismiopDatabase\Pst\PstDetail $pstDetail
 * @property-read \Wawans\SismiopDatabase\Pst\PstPermohonan $pstPermohonan
 * @property-read RefSeksi $refSeksi
 * @property-read LookupItem $refStatusBerkas
 * @property-read RefSubSeksi $refSubSeksi
 * @method static \Illuminate\Database\Eloquent\Builder|PstPosisiBerkas kirim()
 * @method static \Illuminate\Database\Eloquent\Builder|PstPosisiBerkas newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PstPosisiBerkas newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PstPosisiBerkas posisiBerkasTerakhir()
 * @method static \Illuminate\Database\Eloquent\Builder|PstPosisiBerkas query()
 * @method static \Illuminate\Database\Eloquent\Builder|PstPosisiBerkas terima()
 * @mixin \Eloquent
 */
class PstPosisiBerkas extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = ['kd_kanwil', 'kd_kppbb', 'thn_pelayanan', 'bundel_pelayanan', 'no_urut_pelayanan', 'no_urut_posisi_berkas'];

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
        'no_urut_posisi_berkas',
        'catatan_posisi_berkas',
        'kd_seksi_berkas',
        'kd_subseksi_berkas',
        'status_selesai',
        'status_posisi_berkas',
        'akhir_posisi_berkas',
        'tgl_posisi_berkas',
        'nip_posisi_berkas',
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
        'akhir_posisi_berkas' => 'boolean',
        'tgl_posisi_berkas' => 'datetime',
    ];

    /**
     * Bootstrap the model and its traits.
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $last = $model
                ->where('kd_kanwil', $model->kd_kanwil)
                ->where('kd_kppbb', $model->kd_kppbb)
                ->where('thn_pelayanan', $model->thn_pelayanan)
                ->where('bundel_pelayanan', $model->bundel_pelayanan)
                ->where('no_urut_pelayanan', $model->no_urut_pelayanan)
                ->max('no_urut_posisi_berkas');
            $next = ($last) ? ($last + 1) : 1;

            $model->no_urut_posisi_berkas = $next;
            $model->akhir_posisi_berkas = true;
        });
    }

    public function pstPermohonan()
    {
        return $this->belongsTo(PstPermohonan::class,
            ['kd_kanwil', 'kd_kppbb', 'thn_pelayanan', 'bundel_pelayanan', 'no_urut_pelayanan'],
            ['kd_kanwil', 'kd_kppbb', 'thn_pelayanan', 'bundel_pelayanan', 'no_urut_pelayanan']
        );
    }

    public function pstDetail()
    {
        return $this->belongsTo(PstDetail::class,
            ['kd_kanwil', 'kd_kppbb', 'thn_pelayanan', 'bundel_pelayanan', 'no_urut_pelayanan'],
            ['kd_kanwil', 'kd_kppbb', 'thn_pelayanan', 'bundel_pelayanan', 'no_urut_pelayanan']
        );
    }

    public function datObjekPajak()
    {
        return $this->belongsTo(DatObjekPajak::class,
            ['kd_propinsi_pemohon','kd_dati2_pemohon','kd_kecamatan_pemohon','kd_kelurahan_pemohon','kd_blok_pemohon','no_urut_pemohon','kd_jns_op_pemohon'],
            ['kd_propinsi','kd_dati2','kd_kecamatan','kd_kelurahan','kd_blok','no_urut','kd_jns_op']);
    }

    public function refStatusBerkas()
    {
        return $this->belongsTo(LookupItem::class, 'status_selesai', 'kd_lookup_item')->whereGroup(Lookup::GROUP_STATUS_BERKAS_PST);
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

    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class, 'nip_posisi_berkas', 'nip');
    }

    /**
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopePosisiBerkasTerakhir($query)
    {
        return $query->where('no_urut_posisi_berkas', DB::raw('max(no_urut_posisi_berkas)'));
    }

    /**
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeKirim($query)
    {
        return $query->where('status_posisi_berkas', 0);
    }

    /**
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeTerima($query)
    {
        return $query->where('status_posisi_berkas', 1);
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
