<?php

namespace Wawans\SismiopDatabase;

/**
 * @property string $kd_propinsi
 * @property string $kd_dati2
 * @property string $thn_pajak_cr
 * @property string $kd_sektor
 * @property string|null $collection_ratio
 * @property string|null $sys_nc00006$
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CollectionRatio newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CollectionRatio newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CollectionRatio query()
 *
 * @mixin \Eloquent
 */
class CollectionRatio extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = [
        'kd_propinsi',
        'kd_dati2',
        'thn_pajak_cr',
        'kd_sektor',
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
        'thn_pajak_cr',
        'kd_sektor',
        'collection_ratio',
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
