<?php

namespace Wawans\SismiopDatabase\Dbkb;

use Wawans\SismiopDatabase\Model;

/**
 * @property string $kd_propinsi
 * @property string $kd_dati2
 * @property string $thn_dbkb_jpb6
 * @property string $kls_dbkb_jpb6
 * @property string|null $nilai_dbkb_jpb6
 * @property string|null $sys_nc00006$
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DbkbJpb6 newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DbkbJpb6 newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DbkbJpb6 query()
 *
 * @mixin \Eloquent
 */
class DbkbJpb6 extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = [
        'kd_propinsi',
        'kd_dati2',
        'thn_dbkb_jpb6',
        'kls_dbkb_jpb6',
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
        'thn_dbkb_jpb6',
        'kls_dbkb_jpb6',
        'nilai_dbkb_jpb6',
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
