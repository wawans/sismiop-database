<?php

namespace Wawans\SismiopDatabase\Ref;

use Wawans\SismiopDatabase\Model;

/**
 * @property string $indeks_range
 * @property string $kd_jns_range
 * @property string|null $kd_sk_njop_njkp
 * @property string|null $range_thn_awal
 * @property string|null $range_thn_akhir
 * @property string|null $sys_nc00006$
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefThnNjkpNjoptkpTarif newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefThnNjkpNjoptkpTarif newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefThnNjkpNjoptkpTarif query()
 *
 * @mixin \Eloquent
 */
class RefThnNjkpNjoptkpTarif extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = [
        'indeks_range',
        'kd_jns_range',
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
        'indeks_range',
        'kd_jns_range',
        'kd_sk_njop_njkp',
        'range_thn_awal',
        'range_thn_akhir',
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
