<?php

namespace Wawans\SismiopDatabase\Ref;

use Wawans\SismiopDatabase\Casts\StrFn;
use Wawans\SismiopDatabase\Casts\StrPad;
use Wawans\SismiopDatabase\Model;

/**
 * Wawans\SismiopDatabase\Ref\RefPebin
 *
 * @property string $kd_pebin
 * @property string|null $nm_pebin
 * @property-read mixed $nama
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefPebin newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefPebin newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefPebin query()
 *
 * @mixin \Eloquent
 */
class RefPebin extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'kd_pebin';

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
        'kd_pebin',
        'nm_pebin',
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
    protected $casts = [
        'kd_pebin' => StrPad::class.':2',
        'nm_pebin' => StrFn::class.':strtoupper',
    ];

    public function getNamaAttribute()
    {
        return $this->nm_pebin;
    }
}
