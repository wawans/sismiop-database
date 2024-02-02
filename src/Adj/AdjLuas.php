<?php

namespace Wawans\SismiopDatabase\Adj;

use Wawans\SismiopDatabase\Model;

class AdjLuas extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = [
        'kd_jpb',
        'tipe_bng',
        'kd_bng_lantai',
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
        'kd_jpb',
        'tipe_bng',
        'kd_bng_lantai',
        'pct_adj_luas',
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
