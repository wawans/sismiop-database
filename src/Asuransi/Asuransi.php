<?php

namespace Wawans\SismiopDatabase\Asuransi;

use Wawans\SismiopDatabase\Model;

/**
 * @property string $no_polis
 * @property string|null $no_penduduk
 * @property string|null $ket_asuransi
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Asuransi newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Asuransi newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Asuransi query()
 *
 * @mixin \Eloquent
 */
class Asuransi extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'no_polis';

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
        'no_polis',
        'no_penduduk',
        'ket_asuransi',
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
