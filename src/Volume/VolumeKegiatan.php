<?php

namespace Wawans\SismiopDatabase\Volume;

use Wawans\SismiopDatabase\Model;

class VolumeKegiatan extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'vol_kegiatan';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = [
        'KD_JPB',
        'TIPE_BNG',
        'KD_BNG_LANTAI',
        'KD_PEKERJAAN',
        'KD_KEGIATAN',
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
        'KD_JPB',
        'TIPE_BNG',
        'KD_BNG_LANTAI',
        'KD_PEKERJAAN',
        'KD_KEGIATAN',
        'VOL_KEGIATAN',
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
