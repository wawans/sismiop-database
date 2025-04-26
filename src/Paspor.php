<?php

namespace Wawans\SismiopDatabase;

/**
 * @property string $no_paspor
 * @property string|null $no_penduduk
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Paspor newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Paspor newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Paspor query()
 *
 * @mixin \Eloquent
 */
class Paspor extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'no_paspor';

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
        'no_paspor',
        'no_penduduk',
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
