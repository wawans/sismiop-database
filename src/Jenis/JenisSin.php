<?php

namespace Wawans\SismiopDatabase\Jenis;

use Wawans\SismiopDatabase\Model;

/**
 * @property string $kd_jns_sin
 * @property string|null $ket_jns_sin
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|JenisSin newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|JenisSin newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|JenisSin query()
 *
 * @mixin \Eloquent
 */
class JenisSin extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'kd_jns_sin';

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
        'kd_jns_sin',
        'ket_jns_sin',
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
