<?php

namespace Wawans\SismiopDatabase;

use Wawans\SismiopDatabase\Model;

class Dokumen extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = [
        'kd_kanwil',
        'kd_kppbb',
        'jns_dokumen',
        'no_dokumen',
    ];

    /**
     * The "type" of the primary key ID.
     *
     * @var string
     */
    protected $keyType = 'int';

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'kd_kanwil',
        'kd_kppbb',
        'jns_dokumen',
        'no_dokumen',
        'tgl_pendataan_dok',
        'nip_pendata_dok',
        'tgl_pemeriksaan_dok',
        'nip_pemeriksa_dok',
        'tgl_perekaman_dok',
        'nip_perekam_dok',
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
}
