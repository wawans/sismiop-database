<?php

namespace Wawans\SismiopDatabase;

use Wawans\SismiopDatabase\Model;

class TipeBangunan extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'tipe_bng';

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
        'tipe_bng',
        'nm_tipe_bng',
        'luas_min_tipe_bng',
        'luas_max_tipe_bng',
        'faktor_pembagi_tipe_bng',
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
