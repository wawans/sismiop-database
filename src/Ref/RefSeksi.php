<?php

namespace Wawans\SismiopDatabase\Ref;

use Wawans\SismiopDatabase\Casts\StrFn;
use Wawans\SismiopDatabase\Casts\StrPad;
use Wawans\SismiopDatabase\Model;

/**
 * Wawans\SismiopDatabase\Ref\RefSeksi
 *
 * @property string $KD_SEKSI
 * @property string|null $NM_SEKSI
 * @property string|null $NO_SRT_SEKSI
 * @property string|null $KODE_SURAT_1
 * @property string|null $KODE_SURAT_2
 * @property StrPad $kd_seksi
 * @property StrFn $nm_seksi
 * @property-read mixed $nama
 * @property-read \Illuminate\Database\Eloquent\Collection|\Wawans\SismiopDatabase\Ref\RefSubSeksi[] $refSubSeksi
 * @method static \Illuminate\Database\Eloquent\Builder|RefSeksi newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RefSeksi newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RefSeksi query()
 * @mixin \Eloquent
 */
class RefSeksi extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'kd_seksi';

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
        'nm_seksi',
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
        'nm_seksi' => StrFn::class . ':strtoupper',
    ];

    public function refSubSeksi()
    {
        return $this->hasMany(RefSubSeksi::class, $this->primaryKey, $this->primaryKey);
    }

    public function getNamaAttribute()
    {
        return $this->nm_seksi;
    }
}
