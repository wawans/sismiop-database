<?php

namespace Wawans\SismiopDatabase\Ref;

use Wawans\SismiopDatabase\Casts\StrFn;
use Wawans\SismiopDatabase\Casts\StrPad;
use Wawans\SismiopDatabase\Model;

/**
 * Wawans\SismiopDatabase\Ref\RefUpb
 *
 * @property string $kd_pebin
 * @property string $kd_pbi
 * @property string $kd_ppbi
 * @property string $kd_upb
 * @property string|null $nm_upb
 * @property string|null $jalan_upb
 * @property string|null $blok_kav_no_upb
 * @property string|null $rw_upb
 * @property string|null $rt_upb
 * @property string|null $kelurahan_upb
 * @property string|null $kota_upb
 * @property-read mixed $alamat
 * @property-read mixed $nama
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefUpb newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefUpb newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefUpb query()
 *
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
        'kd_pebin' => StrPad::class.':2',
        'kd_pbi' => StrPad::class.':2',
        'kd_ppbi' => StrPad::class.':2',
        'kd_upb' => StrPad::class.':6',
        'nm_upb' => StrFn::class.':strtoupper',
        'jalan_upb' => StrFn::class.':strtoupper',
        'blok_kav_no_upb' => StrFn::class.':strtoupper',
        'rw_upb' => StrPad::class.':2',
        'rt_upb' => StrPad::class.':3',
        'kelurahan_upb' => StrFn::class.':strtoupper',
        'kota_upb' => StrFn::class.':strtoupper',
    ];

    public function getNamaAttribute()
    {
        return $this->nm_upb;
    }

    public function getAlamatAttribute()
    {
        return $this->jalan_upb.' '.$this->blok_kav_no_upb;
    }
}
