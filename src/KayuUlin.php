<?php

namespace Wawans\SismiopDatabase;

/**
 * @property string $kd_propinsi
 * @property string $kd_dati2
 * @property string $thn_status_kayu_ulin
 * @property string|null $status_kayu_ulin
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KayuUlin newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KayuUlin newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KayuUlin query()
 *
 * @mixin \Eloquent
 */
class KayuUlin extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = [
        'kd_propinsi',
        'kd_dati2',
        'thn_status_kayu_ulin',
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
        'thn_status_kayu_ulin',
        'status_kayu_ulin',
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
