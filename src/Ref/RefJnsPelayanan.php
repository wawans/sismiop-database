<?php

namespace Wawans\SismiopDatabase\Ref;

use Wawans\SismiopDatabase\Casts\StrFn;
use Wawans\SismiopDatabase\Casts\StrPad;
use Wawans\SismiopDatabase\Model;

/**
 * Wawans\SismiopDatabase\Ref\RefJnsPelayanan
 *
 * @property string $KD_JNS_PELAYANAN
 * @property string|null $NM_JENIS_PELAYANAN
 * @property StrPad $kd_jns_pelayanan
 * @property StrFn $nm_jenis_pelayanan
 * @property-read mixed $nama
 * @method static \Illuminate\Database\Eloquent\Builder|RefJnsPelayanan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RefJnsPelayanan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RefJnsPelayanan query()
 * @mixin \Eloquent
 */
class RefJnsPelayanan extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'kd_jns_pelayanan';

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
        'kd_jns_pelayanan',
        'nm_jenis_pelayanan',
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
        'kd_jns_pelayanan' => StrPad::class . ':2',
        'nm_jenis_pelayanan' => StrFn::class . ':strtoupper',
    ];

    public function getNamaAttribute()
    {
        return $this->nm_jenis_pelayanan;
    }
}
