<?php

namespace Wawans\SismiopDatabase\Adj;

use Wawans\SismiopDatabase\Model;

class AdjBangunan extends Model
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
        'kd_adj',
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
        'kd_adj',
        'pct_adj_bng',
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
