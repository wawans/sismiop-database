<?php

namespace Wawans\SismiopDatabase;

/**
 * @property string $mfnpwp_comp
 * @property string $mfkpp_comp
 * @property string $mfcab_comp
 * @property string|null $kd_stat_kantor
 * @property string|null $kd_jns_usaha
 * @property string|null $nm_perusahaan
 * @property string|null $no_akta
 * @property string|null $no_situ
 * @property string|null $no_siup
 * @property string|null $no_ijin_usaha
 * @property string|null $franchise
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CompProfile newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CompProfile newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CompProfile query()
 *
 * @mixin \Eloquent
 */
class CompProfile extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = [
        'mfnpwp_comp',
        'mfkpp_comp',
        'mfcab_comp',
    ];

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
    protected $fillable = [
        'mfnpwp_comp',
        'mfkpp_comp',
        'mfcab_comp',
        'kd_stat_kantor',
        'kd_jns_usaha',
        'nm_perusahaan',
        'no_akta',
        'no_situ',
        'no_siup',
        'no_ijin_usaha',
        'franchise',
    ];

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
