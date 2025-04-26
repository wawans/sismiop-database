<?php

namespace Wawans\SismiopDatabase\Sim;

use Wawans\SismiopDatabase\Model;

/**
 * @property string $kd_propinsi
 * @property string $kd_dati2
 * @property string $sim_thn_dep_jpb_kls_bintang
 * @property string $kd_fasilitas
 * @property string $kd_jpb
 * @property string $sim_kls_bintang
 * @property string|null $sim_nilai_fas_kls_bintang
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SimFasDepJpbKlsBintang newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SimFasDepJpbKlsBintang newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SimFasDepJpbKlsBintang query()
 *
 * @mixin \Eloquent
 */
class SimFasDepJpbKlsBintang extends Model
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
