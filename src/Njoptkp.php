<?php

namespace Wawans\SismiopDatabase;

/**
 * @property string $kd_propinsi
 * @property string $kd_dati2
 * @property string $thn_awal
 * @property string $thn_akhir
 * @property string $nilai_njoptkp
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Njoptkp newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Njoptkp newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Njoptkp query()
 *
 * @mixin \Eloquent
 */
class Njoptkp extends Model
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
        'nilai_njoptkp',
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
