<?php

namespace Wawans\SismiopDatabase\Fasilitas;

use Wawans\SismiopDatabase\Model;

/**
 * @property string $kd_propinsi
 * @property string $kd_dati2
 * @property string $thn_non_dep
 * @property string $kd_fasilitas
 * @property string|null $nilai_non_dep
 * @property string|null $sys_nc00006$
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FasNonDep newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FasNonDep newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FasNonDep query()
 *
 * @mixin \Eloquent
 */
class FasNonDep extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = [
        'kd_propinsi',
        'kd_dati2',
        'thn_non_dep',
        'kd_fasilitas',
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
        'thn_non_dep',
        'kd_fasilitas',
        'nilai_non_dep',
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
