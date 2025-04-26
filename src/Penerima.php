<?php

namespace Wawans\SismiopDatabase;

/**
 * @property string $kd_penerima
 * @property string|null $nm_penerima
 * @property string|null $pct_pembagian
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Penerima newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Penerima newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Penerima query()
 *
 * @mixin \Eloquent
 */
class Penerima extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'kd_penerima';

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
        'kd_penerima',
        'nm_penerima',
        'pct_pembagian',
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
