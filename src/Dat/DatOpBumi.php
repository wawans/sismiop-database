<?php

namespace Wawans\SismiopDatabase\Dat;

use Wawans\SismiopDatabase\Casts\StrPad;
use Wawans\SismiopDatabase\Concerns\WithDatObjekPajak;
use Wawans\SismiopDatabase\Concerns\WithRefDati2;
use Wawans\SismiopDatabase\Concerns\WithRefKecamatan;
use Wawans\SismiopDatabase\Concerns\WithRefKelurahan;
use Wawans\SismiopDatabase\Concerns\WithRefPropinsi;
use Wawans\SismiopDatabase\Constants\Lookup;
use Wawans\SismiopDatabase\Lookup\LookupItem;
use Wawans\SismiopDatabase\Model;

/**
 * Wawans\SismiopDatabase\Dat\DatOpBumi
 *
 * @property string $KD_PROPINSI
 * @property string $KD_DATI2
 * @property string $KD_KECAMATAN
 * @property string $KD_KELURAHAN
 * @property string $KD_BLOK
 * @property string $NO_URUT
 * @property string $KD_JNS_OP
 * @property int $NO_BUMI
 * @property string|null $KD_ZNT
 * @property int|null $LUAS_BUMI
 * @property string|null $JNS_BUMI
 * @property int|null $NILAI_SISTEM_BUMI
 * @property StrPad $kd_propinsi
 * @property StrPad $kd_dati2
 * @property StrPad $kd_kecamatan
 * @property StrPad $kd_kelurahan
 * @property StrPad $kd_blok
 * @property StrPad $no_urut
 * @property-read \Wawans\SismiopDatabase\Dat\DatObjekPajak $datObjekPajak
 * @property-read \Wawans\SismiopDatabase\Dat\DatPetaZnt $datPetaZnt
 * @property-read \Wawans\SismiopDatabase\Ref\RefDati2 $refDati2
 * @property-read LookupItem $refJnsBumi
 * @property-read \Wawans\SismiopDatabase\Ref\RefKecamatan $refKecamatan
 * @property-read \Wawans\SismiopDatabase\Ref\RefKelurahan $refKelurahan
 * @property-read \Wawans\SismiopDatabase\Ref\RefPropinsi $refPropinsi
 * @method static \Illuminate\Database\Eloquent\Builder|DatOpBumi newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DatOpBumi newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DatOpBumi query()
 * @mixin \Eloquent
 */
class DatOpBumi extends Model
{
    use WithDatObjekPajak;
    use WithRefPropinsi;
    use WithRefDati2;
    use WithRefKecamatan;
    use WithRefKelurahan;

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
        'no_bumi',
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
        'no_bumi',
        'kd_znt',
        'luas_bumi',
        'jns_bumi',
        'nilai_sistem_bumi',
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
        'kd_dati2' => StrPad::class . ':2',
        'kd_kecamatan' => StrPad::class . ':3',
        'kd_kelurahan' => StrPad::class . ':3',
        'kd_blok' => StrPad::class . ':3',
        'no_urut' => StrPad::class . ':4',
    ];

    /**
     * The relations to eager load on every query.
     *
     * @var array
     */
    protected $with = ['refJnsBumi'];

    public function datPetaZnt()
    {
        return $this->belongsTo(DatPetaZnt::class,
            ['kd_propinsi','kd_dati2','kd_kecamatan','kd_kelurahan','kd_blok','kd_znt'],
            ['kd_propinsi','kd_dati2','kd_kecamatan','kd_kelurahan','kd_blok','kd_znt']);
    }

    public function refJnsBumi()
    {
        return $this->belongsTo(LookupItem::class, 'jns_bumi', 'kd_lookup_item')->whereGroup(Lookup::GROUP_JNS_BUMI_OP);
    }
}
