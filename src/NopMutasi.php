<?php

namespace Wawans\SismiopDatabase;

use Wawans\SismiopDatabase\Model;

class NopMutasi extends Model
{
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
        'indeks_mutasi',
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
        'kd_kecamatan',
        'kd_kelurahan',
        'kd_blok',
        'no_urut',
        'kd_jns_op',
        'indeks_mutasi',
        'kd_propinsi_mutasi',
        'kd_dati2_mutasi',
        'kd_kecamatan_mutasi',
        'kd_kelurahan_mutasi',
        'kd_blok_mutasi',
        'no_urut_mutasi',
        'kd_jns_op_mutasi',
        'luas_bumi_mutasi',
        'tgl_rekam_nop_mutasi',
        'nip_perekam_nop_mutasi',
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
