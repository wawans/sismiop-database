<?php

namespace Wawans\SismiopDatabase\Dbkb;

use Wawans\SismiopDatabase\Model;

/**
 * @property string $kd_propinsi
 * @property string $kd_dati2
 * @property string $thn_dbkb_jpb2
 * @property string $kls_dbkb_jpb2
 * @property string $lantai_min_jpb2
 * @property string $lantai_max_jpb2
 * @property string|null $nilai_dbkb_jpb2
 * @property string|null $sys_nc00008$
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DbkbJpb2 newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DbkbJpb2 newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DbkbJpb2 query()
 *
 * @mixin \Eloquent
 */
class DbkbJpb2 extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = [
        'kd_propinsi',
        'kd_dati2',
        'thn_dbkb_jpb2',
        'kls_dbkb_jpb2',
        'lantai_min_jpb2',
        'lantai_max_jpb2',
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
        'thn_dbkb_jpb2',
        'kls_dbkb_jpb2',
        'lantai_min_jpb2',
        'lantai_max_jpb2',
        'nilai_dbkb_jpb2',
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
