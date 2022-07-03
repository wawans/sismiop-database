<?php

namespace Wawans\SismiopDatabase\Ref;

use Wawans\SismiopDatabase\Casts\StrPad;
use Wawans\SismiopDatabase\Model;

/**
 * Wawans\SismiopDatabase\Ref\RefMap
 *
 * @property string $KD_SEKTOR
 * @property string|null $KD_MAP
 * @property StrPad $kd_sektor
 * @property-read \Wawans\SismiopDatabase\Ref\RefJnsSektor|null $refJnsSektor
 * @method static \Illuminate\Database\Eloquent\Builder|RefMap newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RefMap newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RefMap query()
 * @mixin \Eloquent
 */
class RefMap extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = ['kd_sektor', 'kd_map'];

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
    protected $fillable = ['kd_sektor', 'kd_map'];

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
    ];

    public function refJnsSektor()
    {
        return $this->belongsTo(RefJnsSektor::class, 'kd_sektor', 'kd_sektor');
    }
}
