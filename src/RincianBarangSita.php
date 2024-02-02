<?php

namespace Wawans\SismiopDatabase;

use Wawans\SismiopDatabase\Model;

class RincianBarangSita extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = [
        'kd_kanwil',
        'kd_kppbb',
        'no_ba_sita',
        'no_urut_barang_sita',
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
        'no_ba_sita',
        'no_urut_barang_sita',
        'jns_barang_sita',
        'nm_barang_sita',
        'al_barang_sita',
        'no_sertifikat',
        'tgl_sertifikat',
        'taksiran_harga_barang_sita',
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
