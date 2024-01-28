<?php

namespace Wawans\SismiopDatabase;

use Wawans\SismiopDatabase\Model;

class PenghapusanOp extends Model
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
        'kd_blok_penghapusan',
        'no_urut_penghapusan',
        'kd_jns_op_penghapusan',
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
        'kd_blok_penghapusan',
        'no_urut_penghapusan',
        'kd_jns_op_penghapusan',
        'thn_pajak_penghapusan_op',
        'no_formulir_penghapusan_op',
        'nama_wp_penghapusan',
        'kd_znt_penghapusan',
        'luas_bumi_penghapusan',
        'nilai_bumi_penghapusan',
        'pbb_hapus_op',
        'tgl_penghapusan_op',
        'nip_perekam_penghapusan_op',
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
