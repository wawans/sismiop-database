<?php

namespace Wawans\SismiopDatabase\Sim;

use Wawans\SismiopDatabase\Model;

/**
 * @property string $kd_propinsi
 * @property string $kd_dati2
 * @property string $sim_thn_hrg_pekerjaan_jpb8
 * @property string $kd_pekerjaan
 * @property string $kd_kegiatan
 * @property string $lbr_bent_min_hrg_jpb8
 * @property string $lbr_bent_max_hrg_jpb8
 * @property string $ting_kolom_min_hrg_jpb8
 * @property string $ting_kolom_max_hrg_jpb8
 * @property string|null $sim_hrg_kegiatan_jpb8
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SimHrgKegiatanJpb8 newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SimHrgKegiatanJpb8 newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SimHrgKegiatanJpb8 query()
 *
 * @mixin \Eloquent
 */
class SimHrgKegiatanJpb8 extends Model
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
