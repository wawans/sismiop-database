<?php

namespace Wawans\SismiopDatabase;

use Wawans\SismiopDatabase\Model;

class KeluaranPst extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'kd_jns_pelayanan';

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
        'kd_jns_pelayanan',
        'sppt_pelayanan',
        'stts_pelayanan',
        'dhkp_pelayanan',
        'sk_pelayanan',
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
