<?php

namespace Wawans\SismiopDatabase\Pembetulan;

use Wawans\SismiopDatabase\Model;

class PembetulanKeberatan extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = [
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
        'thn_pelayanan_keb_kbrt',
        'bundel_pelayanan_kep_kbrt',
        'no_urut_pelayanan_kep_kbrt',
        'jns_sk',
        'no_sk',
        'kd_kls_tanah',
        'thn_awal_kls_tanah',
        'kd_kls_bng',
        'thn_awal_kls_bng',
        'luas_bumi_pembetulan',
        'luas_bng_pembetulan',
        'njop_bumi_pembetulan',
        'njop_bng_pembetulan',
        'pbb_pembetulan',
        'tgl_cetak_pembetulan',
        'nip_pencetak_pembetulan',
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
