<?php

namespace Wawans\SismiopDatabase;

use Wawans\SismiopDatabase\Model;

class PenghapusanBng extends Model
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
        'kd_blok_penghapusan_bng',
        'no_urut_penghapusan_bng',
        'kd_jns_op_penghapusan_bng',
        'no_bng_penghapusan',
        'indeks_penghapusan_bng',
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
        'kd_blok_penghapusan_bng',
        'no_urut_penghapusan_bng',
        'kd_jns_op_penghapusan_bng',
        'no_bng_penghapusan',
        'indeks_penghapusan_bng',
        'thn_pajak_penghapusan_bng',
        'no_formulir_penghapusan_bng',
        'luas_bng_penghapusan',
        'nilai_bng_penghapusan',
        'tgl_penghapusan_bng',
        'nip_perekam_penghapusan_bng',
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
