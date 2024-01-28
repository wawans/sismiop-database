<?php

namespace Wawans\SismiopDatabase;

use Wawans\SismiopDatabase\Model;

class KeputusanKeberatanPbb extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = [
        'KD_KANWIL',
        'KD_KPPBB',
        'THN_PELAYANAN',
        'BUNDEL_PELAYANAN',
        'NO_URUT_PELAYANAN',
        'KD_PROPINSI_PEMOHON',
        'KD_DATI2_PEMOHON',
        'KD_KECAMATAN_PEMOHON',
        'KD_KELURAHAN_PEMOHON',
        'KD_BLOK_PEMOHON',
        'NO_URUT_PEMOHON',
        'KD_JNS_OP_PEMOHON',
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
        'kd_kanwil',
        'kd_kppbb',
        'thn_pelayanan',
        'bundel_pelayanan',
        'no_urut_pelayanan',
        'kd_propinsi_pemohon',
        'kd_dati2_pemohon',
        'kd_kecamatan_pemohon',
        'kd_kelurahan_pemohon',
        'kd_blok_pemohon',
        'no_urut_pemohon',
        'kd_jns_op_pemohon',
        'jns_sk',
        'no_sk',
        'jns_keputusan',
        'kd_kls_tanah',
        'thn_awal_kls_tanah',
        'kd_kls_bng',
        'thn_awal_kls_bng',
        'luas_bumi_sk_keberatan',
        'luas_bng_sk_keberatan',
        'njop_bumi_sk_keberatan',
        'njop_bng_sk_keberatan',
        'pbb_sk_keberatan',
        'tgl_cetak_sk_keberatan',
        'nip_pencetak_sk_keberatan',
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
