<?php

namespace Wawans\SismiopDatabase\Sim;

use Wawans\SismiopDatabase\Model;

/**
 * @property string $kd_propinsi
 * @property string $kd_dati2
 * @property string $sim_thn_dbkb_daya_dukung
 * @property string $type_konstruksi
 * @property string|null $sim_nilai_dbkb_daya_dukung
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SimDbkbDayaDukung newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SimDbkbDayaDukung newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SimDbkbDayaDukung query()
 *
 * @mixin \Eloquent
 */
class SimDbkbDayaDukung extends Model
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
