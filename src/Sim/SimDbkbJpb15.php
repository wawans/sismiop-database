<?php

namespace Wawans\SismiopDatabase\Sim;

use Wawans\SismiopDatabase\Model;

/**
 * @property string $kd_propinsi KD_PROPINSI
 * @property string $kd_dati2 KD_DATI2
 * @property string $sim_thn_dbkb_jpb15 SIM_THN_DBKB_JPB15
 * @property string $sim_jns_tangki_dbkb_jpb15 SIM_JNS_TANGKI_DBKB_JPB15
 * @property string $sim_kapasitas_min_dbkb_jpb15 SIM_KAPASITAS_MIN_DBKB_JPB15
 * @property string $sim_kapasitas_max_dbkb_jpb15 SIM_KAPASITAS_MAX_DBKB_JPB15
 * @property string|null $sim_nilai_dbkb_jpb15 SIM_NILAI_DBKB_JPB15
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SimDbkbJpb15 newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SimDbkbJpb15 newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SimDbkbJpb15 query()
 *
 * @mixin \Eloquent
 */
class SimDbkbJpb15 extends Model
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
