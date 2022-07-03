<?php

namespace Wawans\SismiopDatabase\Ref;

use Wawans\SismiopDatabase\Concerns\WithRefDati2;
use Wawans\SismiopDatabase\Concerns\WithRefPropinsi;
use Wawans\SismiopDatabase\Model;

/**
 * Wawans\SismiopDatabase\Ref\RefBukuStimulus
 *
 * @property string $KD_PROPINSI
 * @property string $KD_DATI2
 * @property string $THN_PAJAK
 * @property string|null $BUKU
 * @property int|null $NILAI_MIN
 * @property int|null $NILAI_MAX
 * @property-read \Wawans\SismiopDatabase\Ref\RefPropinsi|null $refPropinsi
 * @method static \Illuminate\Database\Eloquent\Builder|RefBukuStimulus newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RefBukuStimulus newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RefBukuStimulus query()
 * @mixin \Eloquent
 */
class RefBukuStimulus extends Model
{
    use WithRefPropinsi;
    use WithRefDati2;

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = [
        'kd_propinsi',
        'kd_dati2',
        'thn_pajak',
    ];

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
        'kd_propinsi',
        'kd_dati2',
        'thn_pajak',
        'buku',
        'nilai_min',
        'nilai_max',
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
