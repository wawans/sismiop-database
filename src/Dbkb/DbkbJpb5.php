<?php

namespace Wawans\SismiopDatabase\Dbkb;

use Wawans\SismiopDatabase\Model;

/**
 * @property string $kd_propinsi
 * @property string $kd_dati2
 * @property string $thn_dbkb_jpb5
 * @property string $kls_dbkb_jpb5
 * @property string $lantai_min_jpb5
 * @property string $lantai_max_jpb5
 * @property string|null $nilai_dbkb_jpb5
 * @property string|null $sys_nc00008$
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DbkbJpb5 newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DbkbJpb5 newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DbkbJpb5 query()
 *
 * @mixin \Eloquent
 */
class DbkbJpb5 extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = [
        'kd_propinsi',
        'kd_dati2',
        'thn_dbkb_jpb5',
        'kls_dbkb_jpb5',
        'lantai_min_jpb5',
        'lantai_max_jpb5',
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
        'thn_dbkb_jpb5',
        'kls_dbkb_jpb5',
        'lantai_min_jpb5',
        'lantai_max_jpb5',
        'nilai_dbkb_jpb5',
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
