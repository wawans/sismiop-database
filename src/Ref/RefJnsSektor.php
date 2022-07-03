<?php

namespace Wawans\SismiopDatabase\Ref;

use Wawans\SismiopDatabase\Casts\StrFn;
use Wawans\SismiopDatabase\Casts\StrPad;
use Wawans\SismiopDatabase\Model;

/**
 * Wawans\SismiopDatabase\Ref\RefJnsSektor
 *
 * @property string $KD_SEKTOR
 * @property string|null $NM_SEKTOR
 * @property StrPad $kd_sektor
 * @property StrFn $nm_sektor
 * @property-read mixed $nama
 * @method static \Illuminate\Database\Eloquent\Builder|RefJnsSektor newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RefJnsSektor newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RefJnsSektor query()
 * @mixin \Eloquent
 */
class RefJnsSektor extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'kd_sektor';

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
        'kd_sektor',
        'nm_sektor',
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
        'kd_sektor' => StrPad::class . ':2',
        'nm_sektor' => StrFn::class . ':strtoupper',
    ];

    public function getNamaAttribute()
    {
        return $this->nm_sektor;
    }
}
