<?php

namespace Wawans\SismiopDatabase\Sim;

use Wawans\SismiopDatabase\Model;

/**
 * @property string $kd_propinsi
 * @property string $kd_dati2
 * @property string $sim_thn_kegiatan
 * @property string $kd_jpb
 * @property string $tipe_bng
 * @property string $kd_bng_lantai
 * @property string $kd_pekerjaan
 * @property string $kd_kegiatan
 * @property string|null $sim_hrg_kegiatan
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SimHrgKegiatan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SimHrgKegiatan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SimHrgKegiatan query()
 *
 * @mixin \Eloquent
 */
class SimHrgKegiatan extends Model
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
