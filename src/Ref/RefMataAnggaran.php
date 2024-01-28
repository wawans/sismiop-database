<?php

namespace Wawans\SismiopDatabase\Ref;

use Wawans\SismiopDatabase\Model;

class RefMataAnggaran extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = [
        'kd_propinsi',
        'kd_dati2',
        'jns_mata_anggaran',
        'kd_mata_anggaran',
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
        'jns_mata_anggaran',
        'kd_mata_anggaran',
        'nm_mata_anggaran',
        'rekening_kas_negara',
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
