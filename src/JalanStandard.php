<?php

namespace Wawans\SismiopDatabase;

/**
 * @property string $kd_propinsi
 * @property string $kd_dati2
 * @property string $kd_kecamatan
 * @property string $kd_kelurahan
 * @property string $nm_jln_sementara
 * @property string|null $nm_jln_standard
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|JalanStandard newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|JalanStandard newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|JalanStandard query()
 *
 * @mixin \Eloquent
 */
class JalanStandard extends Model
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
        'nm_jln_sementara',
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
        'nm_jln_sementara',
        'nm_jln_standard',
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
