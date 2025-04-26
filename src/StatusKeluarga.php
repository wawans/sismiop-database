<?php

namespace Wawans\SismiopDatabase;

/**
 * @property string $kd_status
 * @property string|null $ket_status
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StatusKeluarga newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StatusKeluarga newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StatusKeluarga query()
 *
 * @mixin \Eloquent
 */
class StatusKeluarga extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'kd_status';

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
        'kd_status',
        'ket_status',
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
