<?php

namespace Wawans\SismiopDatabase\Sim;

use Wawans\SismiopDatabase\Model;

/**
 * @property string $kd_propinsi
 * @property string $kd_dati2
 * @property string $sim_thn_non_dep
 * @property string $kd_fasilitas
 * @property string|null $sim_nilai_non_dep
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SimFasNonDep newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SimFasNonDep newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SimFasNonDep query()
 *
 * @mixin \Eloquent
 */
class SimFasNonDep extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id';

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
    protected $fillable = [];

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
