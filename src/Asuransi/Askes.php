<?php

namespace Wawans\SismiopDatabase\Asuransi;

use Wawans\SismiopDatabase\Model;

/**
 * @property string $no_askes
 * @property string|null $no_penduduk
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Askes newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Askes newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Askes query()
 *
 * @mixin \Eloquent
 */
class Askes extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'no_askes';

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
        'no_askes',
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
