<?php

namespace Wawans\SismiopDatabase\Ref;

use Wawans\SismiopDatabase\Casts\StrPad;
use Wawans\SismiopDatabase\Concerns\WithRefDati2;
use Wawans\SismiopDatabase\Concerns\WithRefPropinsi;
use Wawans\SismiopDatabase\Model;

/**
 * Wawans\SismiopDatabase\Ref\RefKecamatan
 *
 * @property string $KD_PROPINSI
 * @property string $KD_DATI2
 * @property string $KD_KECAMATAN
 * @property string|null $NM_KECAMATAN
 * @property StrPad $kd_propinsi
 * @property StrPad $kd_dati2
 * @property StrPad $kd_kecamatan
 * @property-read mixed $nama
 * @property-read \Wawans\SismiopDatabase\Ref\RefPropinsi|null $refPropinsi
 * @property-read \Wawans\SismiopDatabase\Ref\RefDati2|null $refDati2
 * @method static \Illuminate\Database\Eloquent\Builder|RefKecamatan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RefKecamatan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RefKecamatan query()
 * @mixin \Eloquent
 */
class RefKecamatan extends Model
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
        'kd_kecamatan',
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
        'kd_kecamatan' => StrPad::class . ':3',
    ];

    public function getNamaAttribute()
    {
        return $this->nm_kecamatan;
    }
}
