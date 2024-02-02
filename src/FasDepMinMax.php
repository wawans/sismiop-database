<?php

namespace Wawans\SismiopDatabase;

use Wawans\SismiopDatabase\Model;

class FasDepMinMax extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = [
        'kd_propinsi',
        'kd_dati2',
        'thn_dep_min_max',
        'kd_fasilitas',
        'kls_dep_min',
        'kls_dep_max',
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
        'thn_dep_min_max',
        'kd_fasilitas',
        'kls_dep_min',
        'kls_dep_max',
        'nilai_dep_min_max',
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
