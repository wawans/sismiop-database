<?php

namespace Wawans\SismiopDatabase\Sim;

use Wawans\SismiopDatabase\Model;

/**
 * @property string $kd_propinsi
 * @property string $kd_dati2
 * @property string $sim_thn_pajak_sum
 * @property string $kd_sektor
 * @property string|null $sim_njop_bumi_sum
 * @property string|null $sim_njop_bng_sum
 * @property string|null $sim_pbb_terhutang_sum
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SimPbbSum newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SimPbbSum newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SimPbbSum query()
 *
 * @mixin \Eloquent
 */
class SimPbbSum extends Model
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
