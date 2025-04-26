<?php

namespace Wawans\SismiopDatabase\Sim;

use Wawans\SismiopDatabase\Model;

/**
 * @property string $kd_propinsi
 * @property string $kd_dati2
 * @property string $sim_thn_dbkb_jpb12
 * @property string $sim_type_dbkb_jpb12
 * @property string|null $sim_nilai_dbkb_jpb12
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SimDbkbJpb12 newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SimDbkbJpb12 newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SimDbkbJpb12 query()
 *
 * @mixin \Eloquent
 */
class SimDbkbJpb12 extends Model
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
