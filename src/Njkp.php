<?php

namespace Wawans\SismiopDatabase;

use Wawans\SismiopDatabase\Model;

class Njkp extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = [
        'indeks_range',
        'kd_jns_range',
        'kd_propinsi',
        'kd_dati2',
        'kd_jpb_jpt',
        'urutan_njkp',
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
        'indeks_range',
        'kd_jns_range',
        'kd_propinsi',
        'kd_dati2',
        'kd_jpb_jpt',
        'urutan_njkp',
        'njop_min',
        'njop_max',
        'nilai_njkp',
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
