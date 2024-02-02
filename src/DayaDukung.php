<?php

namespace Wawans\SismiopDatabase;

use Wawans\SismiopDatabase\Model;

class DayaDukung extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'type_konstruksi';

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
        'type_konstruksi',
        'daya_dukung_lantai_min_dbkb',
        'daya_dukung_lantai_max_dbkb',
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
