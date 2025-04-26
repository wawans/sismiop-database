<?php

namespace Wawans\SismiopDatabase;

/**
 * @property string $kd_propinsi
 * @property string $kd_dati2
 * @property string $kd_kecamatan
 * @property string $kd_kelurahan
 * @property string $kd_blok
 * @property string $no_urut
 * @property string $kd_jns_op
 * @property string $no_bng
 * @property string $mfnpwp_comp
 * @property string $mfkpp_comp
 * @property string $mfcab_comp
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BngSinProfile newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BngSinProfile newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BngSinProfile query()
 *
 * @mixin \Eloquent
 */
class BngSinProfile extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = [
        'kd_propinsi',
        'kd_dati2',
        'kd_kecamatan',
        'kd_kelurahan',
        'kd_blok',
        'no_urut',
        'kd_jns_op',
        'no_bng',
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
        'kd_propinsi',
        'kd_dati2',
        'kd_kecamatan',
        'kd_kelurahan',
        'kd_blok',
        'no_urut',
        'kd_jns_op',
        'no_bng',
        'mfnpwp_comp',
        'mfkpp_comp',
        'mfcab_comp',
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
