<?php

namespace Wawans\SismiopDatabase;

/**
 * @property string $umur_efektif
 * @property string $kd_range_penyusutan
 * @property string $kondisi_bng_susut
 * @property string|null $nilai_penyusutan
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Penyusutan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Penyusutan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Penyusutan query()
 *
 * @mixin \Eloquent
 */
class Penyusutan extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = [
        'umur_efektif',
        'kd_range_penyusutan',
        'kondisi_bng_susut',
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
        'umur_efektif',
        'kd_range_penyusutan',
        'kondisi_bng_susut',
        'nilai_penyusutan',
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
