<?php

namespace Wawans\SismiopDatabase;

use Wawans\SismiopDatabase\Model;

class Penerimaan extends Model
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
        'tahun_penerimaan',
        'bulan_penerimaan',
        'minggu_ke_penerimaan',
        'penerimaan_ke',
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
        'tahun_penerimaan',
        'bulan_penerimaan',
        'minggu_ke_penerimaan',
        'penerimaan_ke',
        'jns_penerimaan',
        'besar_penerimaan',
        'tgl_rekam_penerimaan',
        'nip_rekam_trm_penerimaan',
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
