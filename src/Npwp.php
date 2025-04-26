<?php

namespace Wawans\SismiopDatabase;

/**
 * @property string $mfnpwp
 * @property string $mfkpp
 * @property string $mfcab
 * @property string|null $kd_klu
 * @property string|null $no_penduduk
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Npwp newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Npwp newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Npwp query()
 *
 * @mixin \Eloquent
 */
class Npwp extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = [
        'mfnpwp',
        'mfkpp',
        'mfcab',
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
        'mfnpwp',
        'mfkpp',
        'mfcab',
        'kd_klu',
        'no_penduduk',
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
