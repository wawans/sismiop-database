<?php

namespace Wawans\SismiopDatabase\Dat;

use Wawans\SismiopDatabase\Model;

class DatOpAnggota extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = [
        'kd_propinsi_induk',
        'kd_dati2_induk',
        'kd_kecamatan_induk',
        'kd_kelurahan_induk',
        'kd_blok_induk',
        'no_urut_induk',
        'kd_jns_op_induk',
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
        'kd_propinsi_induk',
        'kd_dati2_induk',
        'kd_kecamatan_induk',
        'kd_kelurahan_induk',
        'kd_blok_induk',
        'no_urut_induk',
        'kd_jns_op_induk',
        'kd_propinsi',
        'kd_dati2',
        'kd_kecamatan',
        'kd_keluraha',
        'kd_blok',
        'no_urut',
        'kd_jns_op',
        'luas_bumi_beban',
        'luas_bng_beban',
        'nilai_sistem_bumi_beban',
        'nilai_sistem_bng_beban',
        'njop_bumi_beban',
        'njop_bng_beban',
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
