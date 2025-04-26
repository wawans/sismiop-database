<?php

namespace Wawans\SismiopDatabase;

/**
 * @property string $kd_stat_kawin
 * @property string|null $ket_stat_kawin
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StatusKawin newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StatusKawin newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StatusKawin query()
 *
 * @mixin \Eloquent
 */
class StatusKawin extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'kd_stat_kawin';

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
        'kd_stat_kawin',
        'ket_stat_kawin',
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
