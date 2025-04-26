<?php

namespace Wawans\SismiopDatabase\Dbkb;

use Wawans\SismiopDatabase\Model;

/**
 * @property string $kd_propinsi
 * @property string $kd_dati2
 * @property string $thn_dbkb_jpb15
 * @property string $jns_tangki_dbkb_jpb15
 * @property string $kapasitas_min_dbkb_jpb15
 * @property string $kapasitas_max_dbkb_jpb15
 * @property string|null $nilai_dbkb_jpb15
 * @property string|null $sys_nc00008$
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DbkbJpb15 newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DbkbJpb15 newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DbkbJpb15 query()
 *
 * @mixin \Eloquent
 */
class DbkbJpb15 extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = [
        'kd_propinsi',
        'kd_dati2',
        'thn_dbkb_jpb15',
        'jns_tangki_dbkb_jpb15',
        'kapasitas_min_dbkb_jpb15',
        'kapasitas_max_dbkb_jpb15',
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
        'thn_dbkb_jpb15',
        'jns_tangki_dbkb_jpb15',
        'kapasitas_min_dbkb_jpb15',
        'kapasitas_max_dbkb_jpb15',
        'nilai_dbkb_jpb15',
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
