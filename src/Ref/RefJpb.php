<?php

namespace Wawans\SismiopDatabase\Ref;

use Wawans\SismiopDatabase\Casts\StrFn;
use Wawans\SismiopDatabase\Casts\StrPad;
use Wawans\SismiopDatabase\Model;

/**
 * Wawans\SismiopDatabase\Ref\RefJpb
 *
 * @property string $kd_jpb
 * @property string|null $nm_jpb
 * @property-read mixed $nama
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefJpb newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefJpb newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefJpb query()
 *
 * @mixin \Eloquent
 */
class RefJpb extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'kd_jpb';

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
        'kd_jpb',
        'nm_jpb',
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
        'kd_jpb' => StrPad::class.':2',
        'nm_jpb' => StrFn::class.':strtoupper',
    ];

    public function getNamaAttribute()
    {
        return $this->nm_jpb;
    }
}
