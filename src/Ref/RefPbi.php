<?php

namespace Wawans\SismiopDatabase\Ref;

use Wawans\SismiopDatabase\Casts\StrFn;
use Wawans\SismiopDatabase\Casts\StrPad;
use Wawans\SismiopDatabase\Model;

/**
 * Wawans\SismiopDatabase\Ref\RefPbi
 *
 * @property string $KD_PEBIN
 * @property string $KD_PBI
 * @property string|null $NM_PBI
 * @property StrPad $kd_pebin
 * @property StrPad $kd_pbi
 * @property StrFn $nm_pbi
 * @property-read mixed $nama
 * @property-read \Wawans\SismiopDatabase\Ref\RefPebin|null $refPebin
 * @method static \Illuminate\Database\Eloquent\Builder|RefPbi newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RefPbi newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RefPbi query()
 * @mixin \Eloquent
 */
class RefPbi extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = ['kd_pebin', 'kd_pbi'];

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
        'nm_pbi',
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
        'nm_pbi' => StrFn::class . ':strtoupper',
    ];

    public function refPebin()
    {
        return $this->belongsTo(RefPebin::class,'kd_pebin','kd_pebin');
    }

    public function getNamaAttribute()
    {
        return $this->nm_pbi;
    }
}
