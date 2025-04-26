<?php

namespace Wawans\SismiopDatabase\Dbkb;

use Wawans\SismiopDatabase\Model;

/**
 * @property string $kd_propinsi
 * @property string $kd_dati2
 * @property string $thn_dbkb_standard
 * @property string $kd_jpb
 * @property string $tipe_bng
 * @property string $kd_bng_lantai
 * @property string|null $nilai_dbkb_standard
 * @property string|null $sys_nc00008$
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DbkbStandard newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DbkbStandard newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DbkbStandard query()
 *
 * @mixin \Eloquent
 */
class DbkbStandard extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = [
        'kd_propinsi',
        'kd_dati2',
        'thn_dbkb_standard',
        'kd_jpb',
        'tipe_bng',
        'kd_bng_lantai',
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
        'thn_dbkb_standard',
        'kd_jpb',
        'tipe_bng',
        'kd_bng_lantai',
        'nilai_dbkb_standard',
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
