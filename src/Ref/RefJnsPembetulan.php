<?php

namespace Wawans\SismiopDatabase\Ref;

use Wawans\SismiopDatabase\Casts\StrFn;
use Wawans\SismiopDatabase\Casts\StrPad;
use Wawans\SismiopDatabase\Model;

/**
 * Wawans\SismiopDatabase\Ref\RefJnsPembetulan
 *
 * @property string $KD_PEMBETULAN
 * @property string|null $NM_PEMBETULAN
 * @property StrPad $kd_pembetulan
 * @property StrFn $nm_pembetulan
 * @property-read mixed $nama
 * @method static \Illuminate\Database\Eloquent\Builder|RefJnsPembetulan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RefJnsPembetulan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RefJnsPembetulan query()
 * @mixin \Eloquent
 */
class RefJnsPembetulan extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'kd_pembetulan';

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
        'kd_pembetulan',
        'nm_pembetulan',
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
        'kd_pembetulan' => StrPad::class . ':2',
        'nm_pembetulan' => StrFn::class . ':strtoupper',
    ];

    public function getNamaAttribute()
    {
        return $this->nm_pembetulan;
    }
}
