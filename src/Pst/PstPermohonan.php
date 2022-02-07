<?php

namespace Wawans\SismiopDatabase\Pst;

use Wawans\SismiopDatabase\Model;
use Wawans\SismiopDatabase\Pegawai;

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
    protected $casts = [];

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

    public function pegawaiPenerima()
    {
        return $this->belongsTo(Pegawai::class, 'nip_penerima', 'nip');
    }
}
