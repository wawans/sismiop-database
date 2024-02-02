<?php

namespace Wawans\SismiopDatabase\Dbkb;

use Wawans\SismiopDatabase\Model;

class DbkbJpb3 extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = [
        'kd_propinsi',
        'kd_dati2',
        'thn_dbkb_jpb3',
        'lbr_bent_min_dbkb_jpb3',
        'lbr_bent_max_dbkb_jpb3',
        'ting_kolom_min_dbkb_jpb3',
        'ting_kolom_max_dbkb_jpb3',
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
        'kd_propinsi',
        'kd_dati2',
        'thn_dbkb_jpb3',
        'lbr_bent_min_dbkb_jpb3',
        'lbr_bent_max_dbkb_jpb3',
        'ting_kolom_min_dbkb_jpb3',
        'ting_kolom_max_dbkb_jpb3',
        'nilai_dbkb_jpb3',
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
