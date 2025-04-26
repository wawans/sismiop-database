<?php

namespace Wawans\SismiopDatabase\Sim;

use Wawans\SismiopDatabase\Model;

/**
 * @property string $kd_propinsi
 * @property string $kd_dati2
 * @property string $sim_thn_dbkb_standard
 * @property string $kd_jpb
 * @property string $tipe_bng
 * @property string $kd_bng_lantai
 * @property string|null $sim_nilai_dbkb_standard
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SimDbkbStandard newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SimDbkbStandard newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SimDbkbStandard query()
 *
 * @mixin \Eloquent
 */
class SimDbkbStandard extends Model
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
