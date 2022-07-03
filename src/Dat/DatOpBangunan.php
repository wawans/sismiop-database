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
