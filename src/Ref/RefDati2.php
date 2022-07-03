<?php

namespace Wawans\SismiopDatabase\Ref;

use Wawans\SismiopDatabase\Casts\StrPad;
use Wawans\SismiopDatabase\Concerns\WithRefPropinsi;
use Wawans\SismiopDatabase\Model;

/**
 * Wawans\SismiopDatabase\Ref\RefDati2
 *
 * @property string $KD_PROPINSI
 * @property string $KD_DATI2
 * @property string|null $NM_DATI2
 * @property StrPad $kd_propinsi
 * @property StrPad $kd_dati2
 * @property-read \Wawans\SismiopDatabase\Ref\RefPropinsi|null $refPropinsi
 * @method static \Illuminate\Database\Eloquent\Builder|RefDati2 newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RefDati2 newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RefDati2 query()
 * @mixin \Eloquent
 */
class RefDati2 extends Model
{
    use WithRefPropinsi;

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = [
        'kd_propinsi',
        'kd_dati2',
    ];

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
    protected $fillable = [];

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
        'kd_dati2' => StrPad::class . ':2',
    ];
}
