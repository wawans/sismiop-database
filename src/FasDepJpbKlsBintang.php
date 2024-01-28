<?php

namespace Wawans\SismiopDatabase;

use Wawans\SismiopDatabase\Model;

class FasDepJpbKlsBintang extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = [
        'kd_propinsi',
        'kd_dati2',
        'thn_dep_jpb_kls_bintang',
        'kd_fasilitas',
        'kd_jpb',
        'kls_bintang',
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
        'thn_dep_jpb_kls_bintang',
        'kd_fasilitas',
        'kd_jpb',
        'kls_bintang',
        'nilai_fasilitas_kls_bintang',
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
