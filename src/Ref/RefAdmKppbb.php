<?php

namespace Wawans\SismiopDatabase\Ref;

use Wawans\SismiopDatabase\Casts\StrPad;
use Wawans\SismiopDatabase\Concerns\WithRefDati2;
use Wawans\SismiopDatabase\Concerns\WithRefPropinsi;
use Wawans\SismiopDatabase\Model;

/**
 * Wawans\SismiopDatabase\Ref\RefAdmKppbb
 *
 * @property string $KD_KANWIL
 * @property string $KD_KPPBB
 * @property string $KD_PROPINSI
 * @property string $KD_DATI2
 * @property StrPad $kd_kanwil
 * @property StrPad $kd_kppbb
 * @property StrPad $kd_propinsi
 * @property StrPad $kd_dati2
 * @property-read \Wawans\SismiopDatabase\Ref\RefDati2 $refDati2
 * @property-read \Wawans\SismiopDatabase\Ref\RefKanwil $refKanwil
 * @property-read \Wawans\SismiopDatabase\Ref\RefKppbb $refKppbb
 * @property-read \Wawans\SismiopDatabase\Ref\RefPropinsi $refPropinsi
 * @method static \Illuminate\Database\Eloquent\Builder|RefAdmKppbb newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RefAdmKppbb newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RefAdmKppbb query()
 * @mixin \Eloquent
 */
class RefAdmKppbb extends Model
{
    use WithRefPropinsi;
    use WithRefDati2;

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = [
        'kd_kanwil',
        'kd_kppbb',
        'kd_propinsi',
        'kd_dati2',
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
        'kd_kanwil',
        'kd_kppbb',
        'kd_propinsi',
        'kd_dati2',
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
        'kd_kanwil' => StrPad::class . ':2',
        'kd_kppbb' => StrPad::class . ':2',
        'kd_propinsi' => StrPad::class . ':2',
        'kd_dati2' => StrPad::class . ':2',
    ];

    public function refKanwil()
    {
        return $this->belongsTo(RefKanwil::class, 'kd_kanwil', 'kd_kanwil');
    }

    public function refKppbb()
    {
        return $this->belongsTo(RefKppbb::class, ['kd_kanwil', 'kd_kppbb'], ['kd_kanwil', 'kd_kppbb']);
    }
}
