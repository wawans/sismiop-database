<?php

namespace Wawans\SismiopDatabase;

/**
 * @property string|null $nmkp
 * @property string|null $nmkp2
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Statkp newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Statkp newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Statkp query()
 *
 * @mixin \Eloquent
 */
class Statkp extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id';

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
        'nmkp',
        'nmkp2',
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
