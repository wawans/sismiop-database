<?php

namespace Wawans\SismiopDatabase\Sim;

use Wawans\SismiopDatabase\Model;

/**
 * @property string $kd_propinsi
 * @property string $kd_dati2
 * @property string $sim_thn_dep_min_max
 * @property string $kd_fasilitas
 * @property string $sim_kls_dep_min
 * @property string $sim_kls_dep_max
 * @property string|null $sim_nilai_dep_min_max
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SimFasDepMinMax newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SimFasDepMinMax newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SimFasDepMinMax query()
 *
 * @mixin \Eloquent
 */
class SimFasDepMinMax extends Model
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
