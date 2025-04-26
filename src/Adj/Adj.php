<?php

namespace Wawans\SismiopDatabase\Adj;

use Wawans\SismiopDatabase\Model;

/**
 * @property string $kd_adj
 * @property string|null $nm_adj
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Adj newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Adj newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Adj query()
 *
 * @mixin \Eloquent
 */
class Adj extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'kd_adj';

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
        'kd_adj',
        'nm_adj',
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
