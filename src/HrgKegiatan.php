<?php

namespace Wawans\SismiopDatabase;

use Wawans\SismiopDatabase\Model;

class HrgKegiatan extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = [
        'kd_propinsi',
        'kd_dati2',
        'thn_kegiatan',
        'kd_jpb',
        'tipe_bng',
        'kd_bng_lantai',
        'kd_pekerjaan',
        'kd_kegiatan',
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
        'thn_kegiatan',
        'kd_jpb',
        'tipe_bng',
        'kd_bng_lantai',
        'kd_pekerjaan',
        'kd_kegiatan',
        'hrg_kegiatan',
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
