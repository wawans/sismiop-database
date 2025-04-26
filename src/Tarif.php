<?php

namespace Wawans\SismiopDatabase;

/**
 * @property string $kd_propinsi
 * @property string $kd_dati2
 * @property string $thn_awal
 * @property string $thn_akhir
 * @property string $njop_min
 * @property string $njop_max
 * @property string $nilai_tarif
 * @property string|null $nilai_tarif_khusus
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tarif newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tarif newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tarif query()
 *
 * @mixin \Eloquent
 */
class Tarif extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = [
        'kd_propinsi',
        'kd_dati2',
        'thn_awal',
        'thn_akhir',
        'njop_min',
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
        'thn_awal',
        'thn_akhir',
        'njop_min',
        'njop_max',
        'nilai_tarif',
        'nilai_tarif_khusus',
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
