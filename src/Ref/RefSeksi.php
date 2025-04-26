<?php

namespace Wawans\SismiopDatabase\Ref;

use Wawans\SismiopDatabase\Casts\StrFn;
use Wawans\SismiopDatabase\Casts\StrPad;
use Wawans\SismiopDatabase\Model;

/**
 * Wawans\SismiopDatabase\Ref\RefSeksi
 *
 * @property string $kd_seksi
 * @property string|null $nm_seksi
 * @property string|null $no_srt_seksi
 * @property string|null $kode_surat_1
 * @property string|null $kode_surat_2
 * @property-read mixed $nama
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Wawans\SismiopDatabase\Ref\RefSubSeksi> $refSubSeksi
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefSeksi newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefSeksi newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefSeksi query()
 *
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
        'kd_seksi' => StrPad::class.':2',
        'nm_seksi' => StrFn::class.':strtoupper',
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
