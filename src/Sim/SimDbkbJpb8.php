<?php

namespace Wawans\SismiopDatabase\Sim;

use Wawans\SismiopDatabase\Model;

/**
 * @property string $kd_propinsi
 * @property string $kd_dati2
 * @property string $sim_thn_dbkb_jpb8
 * @property string $sim_lbr_bent_min_dbkb_jpb8
 * @property string $sim_lbr_bent_max_dbkb_jpb8
 * @property string $sim_ting_kolom_min_dbkb_jpb8
 * @property string $sim_ting_kolom_max_dbkb_jpb8
 * @property string|null $sim_nilai_dbkb_jpb8
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SimDbkbJpb8 newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SimDbkbJpb8 newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SimDbkbJpb8 query()
 *
 * @mixin \Eloquent
 */
class SimDbkbJpb8 extends Model
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
