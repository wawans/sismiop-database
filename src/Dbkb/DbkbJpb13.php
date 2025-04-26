<?php

namespace Wawans\SismiopDatabase\Dbkb;

use Wawans\SismiopDatabase\Model;

/**
 * @property string $kd_propinsi
 * @property string $kd_dati2
 * @property string $thn_dbkb_jpb13
 * @property string $kls_dbkb_jpb13
 * @property string $lantai_min_jpb13
 * @property string $lantai_max_jpb13
 * @property string|null $nilai_dbkb_jpb13
 * @property string|null $sys_nc00008$
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DbkbJpb13 newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DbkbJpb13 newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DbkbJpb13 query()
 *
 * @mixin \Eloquent
 */
class DbkbJpb13 extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = [
        'kd_propinsi',
        'kd_dati2',
        'thn_dbkb_jpb13',
        'kls_dbkb_jpb13',
        'lantai_min_jpb13',
        'lantai_max_jpb13',
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
        'thn_dbkb_jpb13',
        'kls_dbkb_jpb13',
        'lantai_min_jpb13',
        'lantai_max_jpb13',
        'nilai_dbkb_jpb13',
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
