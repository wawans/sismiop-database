<?php

namespace Wawans\SismiopDatabase\Dat;

use Wawans\SismiopDatabase\Casts\StrPad;
use Wawans\SismiopDatabase\Concerns\WithDatObjekPajak;
use Wawans\SismiopDatabase\Concerns\WithDatOpBangunan;
use Wawans\SismiopDatabase\Concerns\WithRefDati2;
use Wawans\SismiopDatabase\Concerns\WithRefKecamatan;
use Wawans\SismiopDatabase\Concerns\WithRefKelurahan;
use Wawans\SismiopDatabase\Concerns\WithRefPropinsi;
use Wawans\SismiopDatabase\Model;

/**
 * Wawans\SismiopDatabase\Dat\DatJpb12
 *
 * @property string $kd_propinsi
 * @property string $kd_dati2
 * @property string $kd_kecamatan
 * @property string $kd_kelurahan
 * @property string $kd_blok
 * @property string $no_urut
 * @property string $kd_jns_op
 * @property string $no_bng
 * @property string|null $type_jpb12
 * @property-read \Wawans\SismiopDatabase\Dat\DatObjekPajak $datObjekPajak
 * @property-read \Wawans\SismiopDatabase\Dat\DatOpBangunan $datOpBangunan
 * @property-read \Wawans\SismiopDatabase\Ref\RefDati2 $refDati2
 * @property-read \Wawans\SismiopDatabase\Ref\RefKecamatan $refKecamatan
 * @property-read \Wawans\SismiopDatabase\Ref\RefKelurahan $refKelurahan
 * @property-read \Wawans\SismiopDatabase\Ref\RefPropinsi $refPropinsi
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DatJpb12 newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DatJpb12 newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DatJpb12 query()
 *
 * @mixin \Eloquent
 */
class DatJpb12 extends Model
{
    use WithDatObjekPajak;
    use WithDatOpBangunan;
    use WithRefDati2;
    use WithRefKecamatan;
    use WithRefKelurahan;
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
        'kd_blok',
        'no_urut',
        'kd_jns_op',
        'no_bng',
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
    protected $fillable = [
        'kd_propinsi',
        'kd_dati2',
        'kd_kecamatan',
        'kd_kelurahan',
        'kd_blok',
        'no_urut',
        'kd_jns_op',
        'no_bng',
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
        'kd_propinsi' => StrPad::class.':2',
        'kd_dati2' => StrPad::class.':2',
        'kd_kecamatan' => StrPad::class.':3',
        'kd_kelurahan' => StrPad::class.':3',
        'kd_blok' => StrPad::class.':3',
        'no_urut' => StrPad::class.':4',
    ];
}
