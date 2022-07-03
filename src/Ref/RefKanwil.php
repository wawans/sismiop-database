<?php

namespace Wawans\SismiopDatabase\Ref;

use Wawans\SismiopDatabase\Casts\StrPad;
use Wawans\SismiopDatabase\Model;

/**
 * Wawans\SismiopDatabase\Ref\RefKanwil
 *
 * @property string $KD_KANWIL
 * @property string|null $NM_KANWIL
 * @property string|null $AL_KANWIL
 * @property string|null $KOTA_TERBIT_KANWIL
 * @property string|null $NO_FAKSIMILI
 * @property string|null $NO_TELPON
 * @property StrPad $kd_kanwil
 * @property-read mixed $alamat
 * @property-read mixed $faks
 * @property-read mixed $kota
 * @property-read mixed $nama
 * @property-read mixed $telp
 * @property-read \Illuminate\Database\Eloquent\Collection|\Wawans\SismiopDatabase\Ref\RefAdmKppbb[] $refAdmKppbb
 * @property-read \Illuminate\Database\Eloquent\Collection|\Wawans\SismiopDatabase\Ref\RefAdminKppbb[] $refAdminKppbb
 * @method static \Illuminate\Database\Eloquent\Builder|RefKanwil newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RefKanwil newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RefKanwil query()
 * @mixin \Eloquent
 */
class RefKanwil extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'kd_kanwil';

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
        'nm_kanwil',
        'al_kanwil',
        'kota_terbit_kanwil',
        'no_faksimili',
        'no_telpon',
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
        'kd_kanwil' => StrPad::class . ':2',
    ];

    public function refAdmKppbb()
    {
        return $this->hasMany(RefAdmKppbb::class, $this->primaryKey, $this->primaryKey);
    }

    public function refAdminKppbb()
    {
        return $this->hasMany(RefAdminKppbb::class, $this->primaryKey, $this->primaryKey);
    }

    public function getNamaAttribute()
    {
        return $this->nm_kanwil;
    }

    public function getAlamatAttribute()
    {
        return $this->al_kanwil;
    }

    public function getKotaAttribute()
    {
        return $this->kota_terbit_kanwil;
    }

    public function getFaksAttribute()
    {
        return $this->no_faksimili;
    }

    public function getTelpAttribute()
    {
        return $this->no_telpon;
    }
}
