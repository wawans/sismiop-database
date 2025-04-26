<?php

namespace Wawans\SismiopDatabase;

/**
 * @property string $kd_kantor_lelang
 * @property string|null $nm_kantor_lelang
 * @property string|null $al_kantor_lelang
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KantorLelang newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KantorLelang newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KantorLelang query()
 *
 * @mixin \Eloquent
 */
class KantorLelang extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'kd_kantor_lelang';

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
        'kd_kantor_lelang',
        'nm_kantor_lelang',
        'al_kantor_lelang',
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
