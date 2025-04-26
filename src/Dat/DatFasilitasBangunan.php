<?php

namespace Wawans\SismiopDatabase\Dat;

use Wawans\SismiopDatabase\Casts\StrPad;
use Wawans\SismiopDatabase\Concerns\WithRefDati2;
use Wawans\SismiopDatabase\Concerns\WithRefKecamatan;
use Wawans\SismiopDatabase\Concerns\WithRefKelurahan;
use Wawans\SismiopDatabase\Concerns\WithRefPropinsi;
use Wawans\SismiopDatabase\Constants\FasilitasBangunan;
use Wawans\SismiopDatabase\Fasilitas\Fasilitas;
use Wawans\SismiopDatabase\Model;

/**
 * Wawans\SismiopDatabase\Dat\DatFasilitasBangunan
 *
 * @property string $kd_propinsi
 * @property string $kd_dati2
 * @property string $kd_kecamatan
 * @property string $kd_kelurahan
 * @property string $kd_blok
 * @property string $no_urut
 * @property string $kd_jns_op
 * @property string $no_bng
 * @property string $kd_fasilitas
 * @property string|null $jml_satuan
 * @property-read \Wawans\SismiopDatabase\Dat\DatOpBangunan $datOpBangunan
 * @property-read Fasilitas $fasilitas
 * @property-read \Wawans\SismiopDatabase\Ref\RefDati2 $refDati2
 * @property-read \Wawans\SismiopDatabase\Ref\RefKecamatan $refKecamatan
 * @property-read \Wawans\SismiopDatabase\Ref\RefKelurahan $refKelurahan
 * @property-read \Wawans\SismiopDatabase\Ref\RefPropinsi $refPropinsi
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DatFasilitasBangunan acSplit()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DatFasilitasBangunan acWindows()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DatFasilitasBangunan listrik()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DatFasilitasBangunan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DatFasilitasBangunan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DatFasilitasBangunan query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DatFasilitasBangunan whereFasilitas($value)
 *
 * @mixin \Eloquent
 */
class DatFasilitasBangunan extends Model
{
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
        'kd_fasilitas',
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
        'kd_fasilitas',
        'jml_satuan',
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

    public function datOpBangunan()
    {
        return $this->belongsTo(DatOpBangunan::class,
            ['kd_propinsi', 'kd_dati2', 'kd_kecamatan', 'kd_kelurahan', 'kd_blok', 'no_urut', 'kd_jns_op', 'no_bng'],
            ['kd_propinsi', 'kd_dati2', 'kd_kecamatan', 'kd_kelurahan', 'kd_blok', 'no_urut', 'kd_jns_op', 'no_bng']);
    }

    public function fasilitas()
    {
        return $this->belongsTo(Fasilitas::class, 'kd_fasilitas', 'kd_fasilitas');
    }

    /**
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeAcSplit($query)
    {
        return $query->where('kd_fasilitas', FasilitasBangunan::AC_SPLIT);
    }

    /**
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeAcWindows($query)
    {
        return $query->where('kd_fasilitas', FasilitasBangunan::AC_WINDOWS);
    }

    /**
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeListrik($query)
    {
        return $query->where('kd_fasilitas', FasilitasBangunan::LISTRIK);
    }

    /**
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeWhereFasilitas($query, $value)
    {
        return $query->where('kd_fasilitas', $value);
    }
}
