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
 * @property string $kd_propinsi
 * @property string $kd_dati2
 * @property string $kd_kecamatan
 * @property string $kd_kelurahan
 * @property string $kd_blok
 * @property string $no_urut
 * @property string $kd_jns_op
 * @property string $no_bumi
 * @property string|null $kd_znt
 * @property string|null $luas_bumi
 * @property string|null $jns_bumi
 * @property string|null $nilai_sistem_bumi
 * @property string|null $sys_nc00013$
 * @property-read \Wawans\SismiopDatabase\Dat\DatObjekPajak|null $datObjekPajak
 * @property-read \Wawans\SismiopDatabase\Dat\DatPetaZnt|null $datPetaZnt
 * @property-read \Wawans\SismiopDatabase\Ref\RefDati2 $refDati2
 * @property-read LookupItem|null $refJnsBumi
 * @property-read \Wawans\SismiopDatabase\Ref\RefKecamatan $refKecamatan
 * @property-read \Wawans\SismiopDatabase\Ref\RefKelurahan $refKelurahan
 * @property-read \Wawans\SismiopDatabase\Ref\RefPropinsi $refPropinsi
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DatOpBumi newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DatOpBumi newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DatOpBumi query()
 *
 * @mixin \Eloquent
 */
class DatOpBumi extends Model
{
    use WithDatObjekPajak;
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
        'kd_propinsi' => StrPad::class.':2',
        'kd_dati2' => StrPad::class.':2',
        'kd_kecamatan' => StrPad::class.':3',
        'kd_kelurahan' => StrPad::class.':3',
        'kd_blok' => StrPad::class.':3',
        'no_urut' => StrPad::class.':4',
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
            ['kd_propinsi', 'kd_dati2', 'kd_kecamatan', 'kd_kelurahan', 'kd_blok', 'kd_znt'],
            ['kd_propinsi', 'kd_dati2', 'kd_kecamatan', 'kd_kelurahan', 'kd_blok', 'kd_znt']);
    }

    public function refJnsBumi()
    {
        return $this->belongsTo(LookupItem::class, 'jns_bumi', 'kd_lookup_item')->whereGroup(Lookup::GROUP_JNS_BUMI_OP);
    }
}
