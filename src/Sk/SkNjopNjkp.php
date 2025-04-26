<?php

namespace Wawans\SismiopDatabase\Sk;

use Wawans\SismiopDatabase\Model;

/**
 * @property string $kd_sk_njop_njkp
 * @property string|null $no_sk_njop_njkp
 * @property string|null $tgl_sk_njop_njkp
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SkNjopNjkp newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SkNjopNjkp newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SkNjopNjkp query()
 *
 * @mixin \Eloquent
 */
class SkNjopNjkp extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'kd_sk_njop_njkp';

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
        'kd_sk_njop_njkp',
        'no_sk_njop_njkp',
        'tgl_sk_njop_njkp',
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
