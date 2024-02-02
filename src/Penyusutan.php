<?php

namespace Wawans\SismiopDatabase;

use Wawans\SismiopDatabase\Model;

class Penyusutan extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = [
        'umur_efektif',
        'kd_range_penyusutan',
        'kondisi_bng_susut',
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
        'umur_efektif',
        'kd_range_penyusutan',
        'kondisi_bng_susut',
        'nilai_penyusutan',
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
