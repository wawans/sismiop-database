<?php

namespace Wawans\SismiopDatabase\Fasilitas;

use Wawans\SismiopDatabase\Model;

/**
 * @property string $kd_propinsi
 * @property string $kd_dati2
 * @property string $thn_dep_min_max
 * @property string $kd_fasilitas
 * @property string $kls_dep_min
 * @property string $kls_dep_max
 * @property string|null $nilai_dep_min_max
 * @property string|null $sys_nc00008$
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FasDepMinMax newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FasDepMinMax newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FasDepMinMax query()
 *
 * @mixin \Eloquent
 */
class FasDepMinMax extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = [
        'kd_propinsi',
        'kd_dati2',
        'thn_dep_min_max',
        'kd_fasilitas',
        'kls_dep_min',
        'kls_dep_max',
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
        'thn_dep_min_max',
        'kd_fasilitas',
        'kls_dep_min',
        'kls_dep_max',
        'nilai_dep_min_max',
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
