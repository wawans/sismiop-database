<?php

namespace Wawans\SismiopDatabase\Ref;

use Wawans\SismiopDatabase\Casts\StrFn;
use Wawans\SismiopDatabase\Casts\StrPad;
use Wawans\SismiopDatabase\Model;

/**
 * Wawans\SismiopDatabase\Ref\RefPpbi
 *
 * @property string $KD_PEBIN
 * @property string $KD_PBI
 * @property string $KD_PPBI
 * @property string|null $NM_PPBI
 * @property StrPad $kd_pebin
 * @property StrPad $kd_pbi
 * @property StrPad $kd_ppbi
 * @property StrFn $nm_ppbi
 * @property-read mixed $nama
 * @property-read \Wawans\SismiopDatabase\Ref\RefPbi $refPbi
 * @property-read \Wawans\SismiopDatabase\Ref\RefPebin $refPebin
 * @method static \Illuminate\Database\Eloquent\Builder|RefPpbi newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RefPpbi newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RefPpbi query()
 * @mixin \Eloquent
 */
class RefPpbi extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = ['kd_pebin', 'kd_pbi', 'kd_ppbi'];

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
        'kd_pebin', 'kd_pbi', 'kd_ppbi', 'nm_ppbi'
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
        'nm_ppbi' => StrFn::class . ':strtoupper',
    ];

    public function refPebin()
    {
        return $this->belongsTo(RefPebin::class,'kd_pebin','kd_pebin');
    }

    public function refPbi()
    {
        return $this->belongsTo(RefPbi::class, ['kd_pebin', 'kd_pbi'], ['kd_pebin', 'kd_pbi']);
    }

    public function getNamaAttribute()
    {
        return $this->nm_ppbi;
    }
}
