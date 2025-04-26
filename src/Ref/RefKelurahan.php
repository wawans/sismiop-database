<?php

namespace Wawans\SismiopDatabase\Ref;

use Wawans\SismiopDatabase\Casts\StrPad;
use Wawans\SismiopDatabase\Concerns\WithRefDati2;
use Wawans\SismiopDatabase\Concerns\WithRefKecamatan;
use Wawans\SismiopDatabase\Concerns\WithRefPropinsi;
use Wawans\SismiopDatabase\Model;

/**
 * Wawans\SismiopDatabase\Ref\RefKelurahan
 *
 * @property string $kd_propinsi
 * @property string $kd_dati2
 * @property string $kd_kecamatan
 * @property string $kd_kelurahan
 * @property string|null $kd_sektor
 * @property string|null $nm_kelurahan
 * @property string|null $no_kelurahan
 * @property string|null $kd_pos_kelurahan
 * @property string|null $nm_lurah
 * @property string|null $nip_lurah
 * @property string|null $nm_ptgs1
 * @property string|null $nm_ptgs2
 * @property string|null $nm_kel_br
 * @property string|null $kd_kel_br
 * @property-read mixed $nama
 * @property-read \Wawans\SismiopDatabase\Ref\RefDati2 $refDati2
 * @property-read \Wawans\SismiopDatabase\Ref\RefKecamatan $refKecamatan
 * @property-read \Wawans\SismiopDatabase\Ref\RefPropinsi $refPropinsi
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefKelurahan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefKelurahan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefKelurahan query()
 *
 * @mixin \Eloquent
 */
class RefKelurahan extends Model
{
    use WithRefDati2;
    use WithRefKecamatan;
    use WithRefPropinsi;

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = [
        'kd_propinsi',
        'kd_dati2',
        'kd_kecamatan',
        'kd_kelurahan',
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
        'kd_propinsi' => StrPad::class.':2',
        'kd_dati2' => StrPad::class.':2',
        'kd_kecamatan' => StrPad::class.':3',
        'kd_kelurahan' => StrPad::class.':3',
    ];

    public function getNamaAttribute()
    {
        return $this->nm_kelurahan;
    }
}
