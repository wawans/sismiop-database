<?php

namespace Wawans\SismiopDatabase\Ref;

use Wawans\SismiopDatabase\Casts\StrFn;
use Wawans\SismiopDatabase\Model;

/**
 * Wawans\SismiopDatabase\Ref\RefJabatan
 *
 * @property string $KD_JABATAN
 * @property string|null $NM_JABATAN
 * @property string|null $SINGKATAN_JABATAN
 * @property StrFn $nm_jabatan
 * @property StrFn $singkatan_jabatan
 * @property-read mixed $nama
 * @property-read mixed $singkatan
 * @method static \Illuminate\Database\Eloquent\Builder|RefJabatan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RefJabatan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RefJabatan query()
 * @mixin \Eloquent
 */
class RefJabatan extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'kd_jabatan';

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
        'kd_jabatan',
        'nm_jabatan',
        'singkatan_jabatan',
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
        'nm_jabatan' => StrFn::class . ':strtoupper',
        'singkatan_jabatan' => StrFn::class . ':strtoupper',
    ];

    public function getNamaAttribute()
    {
        return $this->nm_jabatan;
    }

    public function getSingkatanAttribute()
    {
        return $this->singkatan_jabatan;
    }
}
