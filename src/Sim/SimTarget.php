<?php

namespace Wawans\SismiopDatabase\Sim;

use Wawans\SismiopDatabase\Model;

/**
 * @property string $kd_propinsi
 * @property string $kd_dati2
 * @property string $sim_thn_pajak_target
 * @property string $kd_sektor
 * @property string|null $sim_pbb_terhutang_target
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SimTarget newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SimTarget newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SimTarget query()
 *
 * @mixin \Eloquent
 */
class SimTarget extends Model
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
