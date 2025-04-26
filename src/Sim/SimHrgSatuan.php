<?php

namespace Wawans\SismiopDatabase\Sim;

use Wawans\SismiopDatabase\Model;

/**
 * @property string $kd_propinsi
 * @property string $kd_dati2
 * @property string $sim_thn_hrg_satuan
 * @property string $kd_pekerjaan
 * @property string $kd_kegiatan
 * @property string|null $sim_hrg_satuan
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SimHrgSatuan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SimHrgSatuan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SimHrgSatuan query()
 *
 * @mixin \Eloquent
 */
class SimHrgSatuan extends Model
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
