<?php

namespace Wawans\SismiopDatabase;

/**
 * @property string $nip
 * @property string|null $tanda_tangan
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tandatangan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tandatangan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tandatangan query()
 *
 * @mixin \Eloquent
 */
class Tandatangan extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'nip';

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
        'nip',
        'tanda_tangan',
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
