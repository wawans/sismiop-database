<?php

namespace Wawans\SismiopDatabase;

/**
 * @property string $kd_propinsi
 * @property string $kd_dati2
 * @property string $kd_kecamatan
 * @property string $kd_kelurahan
 * @property string $thn_renpend
 * @property string|null $jml_op_bumi_renpend
 * @property string|null $jml_op_bng_renpend
 * @property string|null $luas_bumi_renpend
 * @property string|null $luas_bng_renpend
 * @property string|null $njop_bumi_renpend
 * @property string|null $njop_bng_renpend
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RencanaPendataan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RencanaPendataan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RencanaPendataan query()
 *
 * @mixin \Eloquent
 */
class RencanaPendataan extends Model
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
        'thn_renpend',
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
        'thn_renpend',
        'jml_op_bumi_renpend',
        'jml_op_bng_renpend',
        'luas_bumi_renpend',
        'luas_bng_renpend',
        'njop_bumi_renpend',
        'njop_bng_renpend',
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
