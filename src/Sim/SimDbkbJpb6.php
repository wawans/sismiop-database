<?php

namespace Wawans\SismiopDatabase\Sim;

use Wawans\SismiopDatabase\Model;

/**
 * @property string $kd_propinsi
 * @property string $kd_dati2
 * @property string $sim_thn_dbkb_jpb6
 * @property string $sim_kls_dbkb_jpb6
 * @property string|null $sim_nilai_dbkb_jpb6
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SimDbkbJpb6 newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SimDbkbJpb6 newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SimDbkbJpb6 query()
 *
 * @mixin \Eloquent
 */
class SimDbkbJpb6 extends Model
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
