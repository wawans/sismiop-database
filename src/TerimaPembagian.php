<?php

namespace Wawans\SismiopDatabase;

use Wawans\SismiopDatabase\Model;

class TerimaPembagian extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = [
        'kd_sektor',
        'kd_propinsi',
        'kd_dati2',
        'tahun_pembagian',
        'bulan_pembagian',
        'minggu_ke_pembagian',
        'pembagian_ke',
        'kd_penerima',
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
        'kd_sektor',
        'kd_propinsi',
        'kd_dati2',
        'tahun_pembagian',
        'bulan_pembagian',
        'minggu_ke_pembagian',
        'pembagian_ke',
        'kd_penerima',
        'no_nota_debet_pembagian',
        'tgl_nota_debet_pembagian',
        'besar_pembagian',
        'tgl_rekam_pembagian',
        'nip_rekam_trm_bagi',
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
