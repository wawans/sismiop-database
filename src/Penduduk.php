<?php

namespace Wawans\SismiopDatabase;

use Wawans\SismiopDatabase\Model;

class Penduduk extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'no_penduduk';

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
        'no_penduduk',
        'no_kk',
        'kd_stat_kawin',
        'kd_status',
        'nama',
        'tgl_lahir',
        'kota_lahir',
        'jns_kelamin',
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
