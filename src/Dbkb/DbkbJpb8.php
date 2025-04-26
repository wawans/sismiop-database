<?php

namespace Wawans\SismiopDatabase\Dbkb;

use Wawans\SismiopDatabase\Model;

/**
 * @property string $kd_propinsi
 * @property string $kd_dati2
 * @property string $thn_dbkb_jpb8
 * @property string $lbr_bent_min_dbkb_jpb8
 * @property string $lbr_bent_max_dbkb_jpb8
 * @property string $ting_kolom_min_dbkb_jpb8
 * @property string $ting_kolom_max_dbkb_jpb8
 * @property string|null $nilai_dbkb_jpb8
 * @property string|null $sys_nc00009$
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DbkbJpb8 newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DbkbJpb8 newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DbkbJpb8 query()
 *
 * @mixin \Eloquent
 */
class DbkbJpb8 extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = [
        'kd_propinsi',
        'kd_dati2',
        'thn_dbkb_jpb8',
        'lbr_bent_min_dbkb_jpb8',
        'lbr_bent_max_dbkb_jpb8',
        'ting_kolom_min_dbkb_jpb8',
        'ting_kolom_max_dbkb_jpb8',
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
        'thn_dbkb_jpb8',
        'lbr_bent_min_dbkb_jpb8',
        'lbr_bent_max_dbkb_jpb8',
        'ting_kolom_min_dbkb_jpb8',
        'ting_kolom_max_dbkb_jpb8',
        'nilai_dbkb_jpb8',
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
