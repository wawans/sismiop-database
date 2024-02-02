<?php

namespace Wawans\SismiopDatabase;

use Wawans\SismiopDatabase\Model;

class KelasBangunan extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = [
        'kd_kls_bng',
        'thn_awal_kls_bng',
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
        'kd_kls_bng',
        'thn_awal_kls_bng',
        'thn_akhir_kls_bng',
        'nilai_min_bng',
        'nilai_max_bng',
        'nilai_per_m2_bng',
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
