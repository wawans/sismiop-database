<?php

namespace Wawans\SismiopDatabase;

use Wawans\SismiopDatabase\Model;

class LaporanPembagian extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = [
        'kd_propinsi',
        'kd_dati2',
        'thn_lap_pembagian',
        'bln_lap_pembagian',
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
        'kd_propinsi',
        'kd_dati2',
        'thn_lap_pembagian',
        'bln_lap_pembagian',
        'kd_mata_anggaran',
        'jns_mata_anggaran',
        'no_sk_pembagian',
        'tgl_sk_pembagian',
        'no_spmphp',
        'tgl_spmphp',
        'kd_program',
        'kd_unit',
        'kd_lokasi',
        'potongan',
        'lokasi_kpkn',
        'tgl_rekam_lap_pembagian',
        'nip_rekam_lap_pembagian',
        'kd_proyek',
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
