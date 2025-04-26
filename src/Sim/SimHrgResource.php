<?php

namespace Wawans\SismiopDatabase\Sim;

use Wawans\SismiopDatabase\Model;

/**
 * @property string $kd_propinsi
 * @property string $kd_dati2
 * @property string $sim_thn_hrg_resource
 * @property string $kd_group_resource
 * @property string $kd_resource
 * @property string|null $sim_hrg_resource
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SimHrgResource newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SimHrgResource newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SimHrgResource query()
 *
 * @mixin \Eloquent
 */
class SimHrgResource extends Model
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
