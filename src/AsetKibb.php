<?php

namespace Wawans\SismiopDatabase;

use Wawans\SismiopDatabase\Model;

class AsetKibb extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = [
        'kd_pebin',
        'kd_pbi',
        'kd_ppbi',
        'kd_upb',
        'kd_kibb',
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
        'kd_pebin',
        'kd_pbi',
        'kd_ppbi',
        'kd_upb',
        'kd_kibb',
        'untuk_pemakai',
        'tahun',
        'luas_bangunan',
        'cara',
        'dari',
        'kondisi',
        'harga',
        'nilai_perolehan',
        'sumber_dana',
        'dasar_harga',
        'bukti_hak',
        'kronologis_hak',
        'digunakan',
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
