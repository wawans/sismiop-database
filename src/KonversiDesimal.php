<?php

namespace Wawans\SismiopDatabase;

/**
 * @property string $bilangan_10
 * @property string|null $bilangan_62
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KonversiDesimal newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KonversiDesimal newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KonversiDesimal query()
 *
 * @mixin \Eloquent
 */
class KonversiDesimal extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'bilangan_10';

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
        'bilangan_10',
        'bilangan_62',
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
