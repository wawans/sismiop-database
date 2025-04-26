<?php

namespace Wawans\SismiopDatabase\Ref;

use Wawans\SismiopDatabase\Concerns\WithRefDati2;
use Wawans\SismiopDatabase\Concerns\WithRefPropinsi;
use Wawans\SismiopDatabase\Model;

/**
 * Wawans\SismiopDatabase\Ref\RefBukuStimulus
 *
 * @property string $kd_propinsi
 * @property string $kd_dati2
 * @property string $thn_pajak
 * @property string|null $buku
 * @property string|null $nilai_min
 * @property string|null $nilai_max
 * @property-read \Wawans\SismiopDatabase\Ref\RefDati2|null $refDati2
 * @property-read \Wawans\SismiopDatabase\Ref\RefPropinsi|null $refPropinsi
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefBukuStimulus newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefBukuStimulus newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefBukuStimulus query()
 *
 * @mixin \Eloquent
 */
class RefBukuStimulus extends Model
{
    use WithRefDati2;
    use WithRefPropinsi;

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
