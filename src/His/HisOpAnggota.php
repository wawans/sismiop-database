<?php

namespace Wawans\SismiopDatabase\His;

use Wawans\SismiopDatabase\Model;

class HisOpAnggota extends Model
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
        'his_kd_propinsi_induk',
        'his_kd_dati2_induk',
        'his_kd_kecamatan_induk',
        'his_kd_kelurahan_induk',
        'his_kd_blok_induk',
        'his_no_urut_induk',
        'his_kd_jns_op_induk',
        'his_luas_bumi_beban',
        'his_luas_bng_beban',
        'his_nilai_bumi_beban',
        'his_nilai_bng_beban',
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
