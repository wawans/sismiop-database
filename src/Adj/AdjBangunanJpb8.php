<?php

namespace Wawans\SismiopDatabase\Adj;

use Wawans\SismiopDatabase\Model;

class AdjBangunanJpb8 extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = [
        'kd_adj',
        'lbr_bent_min_adj',
        'lbr_bent_max_adj',
        'ting_kolom_min_adj',
        'ting_kolom_max_adj',
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
        'kd_adj',
        'lbr_bent_min_adj',
        'lbr_bent_max_adj',
        'ting_kolom_min_adj',
        'ting_kolom_max_adj',
        'pct_adj_bng_jpb8',
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
