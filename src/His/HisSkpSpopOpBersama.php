<?php

namespace Wawans\SismiopDatabase\His;

use Wawans\SismiopDatabase\Model;

class HisSkpSpopOpBersama extends Model
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
        'thn_pajak_skp_spop',
        'his_indeks_perubahan_skp_spop',
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
        'thn_pajak_skp_spop',
        'his_indeks_perubahan_skp_spop',
        'his_luas_bumi_beban_skp_spop',
        'his_luas_bng_beban_skp_spop',
        'his_njop_bumi_beban_skp_spop',
        'his_njop_bng_beban_skp_spop',
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
