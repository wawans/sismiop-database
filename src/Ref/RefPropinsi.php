<?php

namespace Wawans\SismiopDatabase\Ref;

use Wawans\SismiopDatabase\Casts\StrFn;
use Wawans\SismiopDatabase\Casts\StrPad;
use Wawans\SismiopDatabase\Model;

/**
 * Wawans\SismiopDatabase\Ref\RefPropinsi
 *
 * @property string $KD_PROPINSI
 * @property string|null $NM_PROPINSI
 * @property StrPad $kd_propinsi
 * @property StrFn $nm_propinsi
 * @property-read mixed $nama
 * @method static \Illuminate\Database\Eloquent\Builder|RefPropinsi newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RefPropinsi newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RefPropinsi query()
 * @mixin \Eloquent
 */
class RefPropinsi extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'kd_propinsi';

    /**
     * The "type" of the primary key ID.
     *
     * @var string
     */
    protected $keyType = 'string';

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'kd_propinsi',
        'nm_propinsi',
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
        'kd_propinsi' => StrPad::class . ':2',
        'nm_propinsi' => StrFn::class . ':strtoupper',
    ];

    public function getNamaAttribute()
    {
        return $this->nm_propinsi;
    }
}
