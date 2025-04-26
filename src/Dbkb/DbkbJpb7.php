<?php

namespace Wawans\SismiopDatabase\Dbkb;

use Wawans\SismiopDatabase\Model;

/**
 * @property string $kd_propinsi
 * @property string $kd_dati2
 * @property string $thn_dbkb_jpb7
 * @property string $jns_dbkb_jpb7
 * @property string $bintang_dbkb_jpb7
 * @property string $lantai_min_jpb7
 * @property string $lantai_max_jpb7
 * @property string|null $nilai_dbkb_jpb7
 * @property string|null $sys_nc00009$
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DbkbJpb7 newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DbkbJpb7 newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DbkbJpb7 query()
 *
 * @mixin \Eloquent
 */
class DbkbJpb7 extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = [
        'kd_propinsi',
        'kd_dati2',
        'thn_dbkb_jpb7',
        'jns_dbkb_jpb7',
        'bintang_dbkb_jpb7',
        'lantai_min_jpb7',
        'lantai_max_jpb7',
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
        'thn_dbkb_jpb7',
        'jns_dbkb_jpb7',
        'bintang_dbkb_jpb7',
        'lantai_min_jpb7',
        'lantai_max_jpb7',
        'nilai_dbkb_jpb7',
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
