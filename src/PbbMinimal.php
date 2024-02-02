<?php

namespace Wawans\SismiopDatabase;

use Wawans\SismiopDatabase\Model;

class PbbMinimal extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = [
        'kd_propinsi',
        'kd_dati2',
        'thn_pbb_minimal',
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
        'thn_pbb_minimal',
        'no_sk_pbb_minimal',
        'tgl_sk_pbb_minimal',
        'nilai_pbb_minimal',
        'tgl_rekam_pbb_minimal',
        'nip_perekam_pbb_minimal',
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
