<?php

namespace Wawans\SismiopDatabase\Dbkb;

use Wawans\SismiopDatabase\Model;

/**
 * @property string $kd_propinsi
 * @property string $kd_dati2
 * @property string $thn_dbkb_mezanin
 * @property string|null $nilai_dbkb_mezanin
 * @property string|null $sys_nc00005$
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DbkbMezanin newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DbkbMezanin newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DbkbMezanin query()
 *
 * @mixin \Eloquent
 */
class DbkbMezanin extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = [
        'kd_propinsi',
        'kd_dati2',
        'thn_dbkb_mezanin',
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
        'thn_dbkb_mezanin',
        'nilai_dbkb_mezanin',
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
