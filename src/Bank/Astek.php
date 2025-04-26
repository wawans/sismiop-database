<?php

namespace Wawans\SismiopDatabase\Bank;

use Wawans\SismiopDatabase\Model;

/**
 * @property string $no_astek
 * @property string|null $no_penduduk
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Astek newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Astek newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Astek query()
 *
 * @mixin \Eloquent
 */
class Astek extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'no_astek';

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
        'no_astek',
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
