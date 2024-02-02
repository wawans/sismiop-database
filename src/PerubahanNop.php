<?php

namespace Wawans\SismiopDatabase;

use Wawans\SismiopDatabase\Model;

class PerubahanNop extends Model
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
        'tgl_perubahan_nop',
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
        'tgl_perubahan_nop',
        'kd_propinsi_asal',
        'kd_dati2_asal',
        'kd_kecamatan_asal',
        'kd_kelurahan_asal',
        'kd_blok_asal',
        'no_urut_asal',
        'kd_jns_op_asal',
        'nip_perubah_nop',
        'status_perubahan_nop',
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
