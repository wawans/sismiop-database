<?php

namespace Wawans\SismiopDatabase;

use Wawans\SismiopDatabase\Model;

class AsetKibt extends Model
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
        'kd_kibt',
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
        'kd_kibt',
        'untuk_pemakai',
        'tahun',
        'cara',
        'luas_bumi',
        'dari',
        'harga',
        'nilai_perolehan',
        'kondisi',
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
