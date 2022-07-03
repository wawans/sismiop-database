<?php

namespace Wawans\SismiopDatabase\Ref;

use Wawans\SismiopDatabase\Casts\StrFn;
use Wawans\SismiopDatabase\Casts\StrPad;
use Wawans\SismiopDatabase\Model;

/**
 * Wawans\SismiopDatabase\Ref\RefUpb
 *
 * @property string $KD_PEBIN
 * @property string $KD_PBI
 * @property string $KD_PPBI
 * @property string $KD_UPB
 * @property string|null $NM_UPB
 * @property string|null $JALAN_UPB
 * @property string|null $BLOK_KAV_NO_UPB
 * @property string|null $RW_UPB
 * @property string|null $RT_UPB
 * @property string|null $KELURAHAN_UPB
 * @property string|null $KOTA_UPB
 * @property StrPad $kd_pebin
 * @property StrPad $kd_pbi
 * @property StrPad $kd_ppbi
 * @property StrPad $kd_upb
 * @property StrFn $nm_upb
 * @property StrFn $jalan_upb
 * @property StrFn $blok_kav_no_upb
 * @property StrPad $rw_upb
 * @property StrPad $rt_upb
 * @property StrFn $kelurahan_upb
 * @property StrFn $kota_upb
 * @property-read mixed $alamat
 * @property-read mixed $nama
 * @method static \Illuminate\Database\Eloquent\Builder|RefUpb newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RefUpb newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RefUpb query()
 * @mixin \Eloquent
 */
class RefUpb extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = ['kd_pebin', 'kd_pbi', 'kd_ppbi', 'kd_upb'];

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
        'kd_pebin',
        'kd_pbi',
        'kd_ppbi',
        'kd_upb',
        'nm_upb',
        'jalan_upb',
        'blok_kav_no_upb',
        'rw_upb',
        'rt_upb',
        'kelurahan_upb',
        'kota_upb',
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
        'kd_pebin' => StrPad::class . ':2',
        'kd_pbi' => StrPad::class . ':2',
        'kd_ppbi' => StrPad::class . ':2',
        'kd_upb' => StrPad::class . ':6',
        'nm_upb' => StrFn::class . ':strtoupper',
        'jalan_upb' => StrFn::class . ':strtoupper',
        'blok_kav_no_upb' => StrFn::class . ':strtoupper',
        'rw_upb' => StrPad::class . ':2',
        'rt_upb' => StrPad::class . ':3',
        'kelurahan_upb' => StrFn::class . ':strtoupper',
        'kota_upb' => StrFn::class . ':strtoupper',
    ];

    public function getNamaAttribute()
    {
        return $this->nm_upb;
    }

    public function getAlamatAttribute()
    {
        return $this->jalan_upb . ' ' . $this->blok_kav_no_upb;
    }
}
