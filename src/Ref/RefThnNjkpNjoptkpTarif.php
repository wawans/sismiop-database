<?php

namespace Wawans\SismiopDatabase\Ref;

use Wawans\SismiopDatabase\Model;

class RefThnNjkpNjoptkpTarif extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = [
        'indeks_range',
        'kd_jns_range',
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
        'indeks_range',
        'kd_jns_range',
        'kd_sk_njop_njkp',
        'range_thn_awal',
        'range_thn_akhir',
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
