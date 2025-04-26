<?php

namespace Wawans\SismiopDatabase\Dat;

use Wawans\SismiopDatabase\Casts\StrPad;
use Wawans\SismiopDatabase\Concerns\WithRefDati2;
use Wawans\SismiopDatabase\Concerns\WithRefKecamatan;
use Wawans\SismiopDatabase\Concerns\WithRefKelurahan;
use Wawans\SismiopDatabase\Concerns\WithRefPropinsi;
use Wawans\SismiopDatabase\Dokumen;
use Wawans\SismiopDatabase\Model;

/**
 * Wawans\SismiopDatabase\Dat\DatNir
 *
 * @property string $kd_propinsi
 * @property string $kd_dati2
 * @property string $kd_kecamatan
 * @property string $kd_kelurahan
 * @property string $kd_znt
 * @property string $thn_nir_znt
 * @property string|null $kd_kanwil
 * @property string|null $kd_kppbb
 * @property string|null $jns_dokumen
 * @property string|null $no_dokumen
 * @property string|null $nir
 * @property string|null $sys_nc00012$
 * @property-read \Wawans\SismiopDatabase\Dat\DatZnt $datZnt
 * @property-read Dokumen|null $dokumen
 * @property-read \Wawans\SismiopDatabase\Ref\RefDati2 $refDati2
 * @property-read \Wawans\SismiopDatabase\Ref\RefKecamatan $refKecamatan
 * @property-read \Wawans\SismiopDatabase\Ref\RefKelurahan $refKelurahan
 * @property-read \Wawans\SismiopDatabase\Ref\RefPropinsi $refPropinsi
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DatNir newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DatNir newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DatNir query()
 *
 * @mixin \Eloquent
 */
class DatNir extends Model
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
        'kd_znt',
        'thn_nir_znt',
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
        'kd_znt',
        'thn_nir_znt',
        'kd_kanwil',
        'kd_kppbb',
        'jns_dokumen',
        'no_dokumen',
        'nir',
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
    ];

    public function datZnt()
    {
        return $this->belongsTo(DatZnt::class,
            ['kd_propinsi', 'kd_dati2', 'kd_kecamatan', 'kd_kelurahan', 'kd_znt'],
            ['kd_propinsi', 'kd_dati2', 'kd_kecamatan', 'kd_kelurahan', 'kd_znt']);
    }

    public function dokumen()
    {
        return $this->belongsTo(Dokumen::class,
            ['kd_kanwil', 'kd_kppbb', 'jns_dokumen', 'no_dokumen'],
            ['kd_kanwil', 'kd_kppbb', 'jns_dokumen', 'no_dokumen']);
    }
}
