<?php

namespace Wawans\SismiopDatabase\Pst;

use Wawans\SismiopDatabase\Casts\StrFn;
use Wawans\SismiopDatabase\Casts\StrPad;
use Wawans\SismiopDatabase\Model;
use Wawans\SismiopDatabase\Pegawai;

/**
 * Wawans\SismiopDatabase\Pst\PstPermohonan
 *
 * @property string $kd_kanwil
 * @property string $kd_kppbb
 * @property string $thn_pelayanan
 * @property string $bundel_pelayanan
 * @property string $no_urut_pelayanan
 * @property string|null $no_srt_permohonan
 * @property \Illuminate\Support\Carbon|null $tgl_surat_permohonan
 * @property string|null $nama_pemohon
 * @property string|null $alamat_pemohon
 * @property string|null $keterangan_pst
 * @property string|null $catatan_pst
 * @property string $status_kolektif
 * @property \Illuminate\Support\Carbon $tgl_terima_dokumen_wp
 * @property \Illuminate\Support\Carbon $tgl_perkiraan_selesai
 * @property string $nip_penerima
 * @property-read Pegawai $pegawaiPenerima
 * @property-read \Wawans\SismiopDatabase\Pst\PstDataOpBaru|null $pstDataOpBaru
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Wawans\SismiopDatabase\Pst\PstDataOpBaru> $pstDataOpBaruKolektif
 * @property-read \Wawans\SismiopDatabase\Pst\PstDetail|null $pstDetail
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Wawans\SismiopDatabase\Pst\PstDetail> $pstDetailKolektif
 * @property-read \Wawans\SismiopDatabase\Pst\PstLampiran|null $pstLampiran
 * @property-read \Wawans\SismiopDatabase\Pst\PstPermohonanPengurangan|null $pstPermohonanPengurangan
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Wawans\SismiopDatabase\Pst\PstPermohonanPengurangan> $pstPermohonanPenguranganKolektif
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Wawans\SismiopDatabase\Pst\PstPosisiBerkas> $pstPosisiBerkas
 * @property-read \Wawans\SismiopDatabase\Pst\PstTambahan|null $pstTambahan
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PstPermohonan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PstPermohonan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PstPermohonan query()
 *
 * @mixin \Eloquent
 */
class PstPermohonan extends Model
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
        'no_srt_permohonan',
        'tgl_surat_permohonan',
        'nama_pemohon',
        'alamat_pemohon',
        'keterangan_pst',
        'catatan_pst',
        'status_kolektif',
        'tgl_terima_dokumen_wp',
        'tgl_perkiraan_selesai',
        'nip_penerima',
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
        'kd_kanwil' => StrPad::class.':2',
        'kd_kppbb' => StrPad::class.':2',
        'thn_pelayanan' => StrPad::class.':4',
        'bundel_pelayanan' => StrPad::class.':4',
        'no_urut_pelayanan' => StrPad::class.':3',
        'nama_pemohon' => StrFn::class.':strtoupper',
        'alamat_pemohon' => StrFn::class.':strtoupper',
        'keterangan_pst' => StrFn::class.':strtoupper',
        'catatan_pst' => StrFn::class.':strtoupper',
        'tgl_surat_permohonan' => 'date',
        'tgl_terima_dokumen_wp' => 'date',
        'tgl_perkiraan_selesai' => 'date',
    ];

    public function pstDetail()
    {
        return $this->hasOne(PstDetail::class, $this->primaryKey, $this->primaryKey);
    }

    public function pstLampiran()
    {
        return $this->hasOne(PstLampiran::class, $this->primaryKey, $this->primaryKey);
    }

    public function pstTambahan()
    {
        return $this->hasOne(PstTambahan::class, $this->primaryKey, $this->primaryKey);
    }

    public function pstDataOpBaru()
    {
        return $this->hasOne(PstDataOpBaru::class, $this->primaryKey, $this->primaryKey);
    }

    public function pstPermohonanPengurangan()
    {
        return $this->hasOne(PstPermohonanPengurangan::class, $this->primaryKey, $this->primaryKey);
    }

    public function pstDetailKolektif()
    {
        return $this->hasMany(PstDetail::class, $this->primaryKey, $this->primaryKey);
    }

    public function pstDataOpBaruKolektif()
    {
        return $this->hasMany(PstDataOpBaru::class, $this->primaryKey, $this->primaryKey);
    }

    public function pstPermohonanPenguranganKolektif()
    {
        return $this->hasMany(PstPermohonanPengurangan::class, $this->primaryKey, $this->primaryKey);
    }

    public function pstPosisiBerkas()
    {
        return $this->hasMany(PstPosisiBerkas::class, $this->primaryKey, $this->primaryKey);
    }

    public function pegawaiPenerima()
    {
        return $this->belongsTo(Pegawai::class, 'nip_penerima', 'nip');
    }
}
