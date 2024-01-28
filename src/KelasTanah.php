<?php

namespace Wawans\SismiopDatabase;

use Wawans\SismiopDatabase\Model;

class KelasTanah extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = [
        'kd_kls_tanah',
        'thn_awal_kls_tanah',
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
        'kd_kls_tanah',
        'thn_awal_kls_tanah',
        'thn_akhir_kls_tanah',
        'nilai_min_tanah',
        'nilai_max_tanah',
        'nilai_per_m2_tanah',
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
