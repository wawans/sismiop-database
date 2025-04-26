<?php

namespace Wawans\SismiopDatabase;

/**
 * @property string $kd_stat_fin_rep
 * @property string|null $ket_stat_fin_rep
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StatFinReport newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StatFinReport newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StatFinReport query()
 *
 * @mixin \Eloquent
 */
class StatFinReport extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'kd_stat_fin_rep';

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
        'kd_stat_fin_rep',
        'ket_stat_fin_rep',
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
