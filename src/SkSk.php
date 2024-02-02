<?php

namespace Wawans\SismiopDatabase;

use Wawans\SismiopDatabase\Model;

class SkSk extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = [
        'kd_kanwil',
        'kd_kppbb',
        'jns_sk',
        'no_sk',
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
        'jns_sk',
        'no_sk',
        'tgl_sk',
        'no_ba_kantor',
        'tgl_ba_kantor',
        'no_ba_lapangan',
        'tgl_ba_lapangan',
        'tgl_cetak_sk',
        'nip_pencetak_sk',
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
