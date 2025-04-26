<?php

namespace Wawans\SismiopDatabase\Sim;

use Wawans\SismiopDatabase\Model;

/**
 * @property string $kd_propinsi KD_PROPINSI
 * @property string $kd_dati2 KD_DATI2
 * @property string $kd_kecamatan KD_KECAMATAN
 * @property string $kd_kelurahan KD_KELURAHAN
 * @property string $sim_thn_pajak_pbb SIM_THN_PAJAK_PBB
 * @property string|null $sim_njop_bumi SIM_NJOP_BUMI
 * @property string|null $sim_njop_bng SIM_NJOP_BNG
 * @property string|null $sim_pbb_terhutang SIM_PBB_TERHUTANG
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SimPbb newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SimPbb newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SimPbb query()
 *
 * @mixin \Eloquent
 */
class SimPbb extends Model
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
