<?php

namespace Wawans\SismiopDatabase;

use Wawans\SismiopDatabase\Model;

class DafnomOp extends Model
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
        'jalan_op',
        'blok_kav_no_op',
        'rw_op',
        'rt_op',
        'jns_bumi',
        'kd_jpb',
        'kd_status_wp',
        'kategori_op',
        'keterangan',
        'no_formulir',
        'tgl_pembentukan',
        'nip_pembentuk',
        'tgl_pemutakhiran',
        'nip_pemutakhir',
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
