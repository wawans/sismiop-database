<?php

namespace Wawans\SismiopDatabase\Ref;

use Wawans\SismiopDatabase\Casts\StrFn;
use Wawans\SismiopDatabase\Casts\StrPad;
use Wawans\SismiopDatabase\Model;

/**
 * Wawans\SismiopDatabase\Ref\RefSubSeksi
 *
 * @property string $KD_SEKSI
 * @property string $KD_SUBSEKSI
 * @property string|null $NM_SUBSEKSI
 * @property StrPad $kd_seksi
 * @property StrPad $kd_subseksi
 * @property StrFn $nm_subseksi
 * @property-read mixed $nama
 * @property-read \Wawans\SismiopDatabase\Ref\RefSeksi|null $refSeksi
 * @method static \Illuminate\Database\Eloquent\Builder|RefSubSeksi newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RefSubSeksi newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RefSubSeksi query()
 * @mixin \Eloquent
 */
class RefSubSeksi extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = ['kd_seksi', 'kd_subseksi'];

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
        'kd_seksi',
        'kd_subseksi',
        'nm_subseksi',
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
        'kd_seksi' => StrPad::class . ':2',
        'kd_subseksi' => StrPad::class . ':2',
        'nm_subseksi' => StrFn::class . ':strtoupper',
    ];

    public function refSeksi()
    {
        return $this->belongsTo(RefSeksi::class, 'kd_seksi', 'kd_seksi');
    }

    public function getNamaAttribute()
    {
        return $this->nm_subseksi;
    }
}
