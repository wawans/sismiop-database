<?php

namespace Wawans\SismiopDatabase\Sim;

use Wawans\SismiopDatabase\Model;

/**
 * @property string $kd_propinsi
 * @property string $kd_dati2
 * @property string $kd_kecamatan
 * @property string $kd_kelurahan
 * @property string $kd_znt
 * @property string $sim_thn_nir_znt
 * @property string|null $sim_nir
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SimDatNir newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SimDatNir newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SimDatNir query()
 *
 * @mixin \Eloquent
 */
class SimDatNir extends Model
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
