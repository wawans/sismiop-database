<?php

namespace Wawans\SismiopDatabase\Ref;

use Wawans\SismiopDatabase\Casts\StrPad;
use Wawans\SismiopDatabase\Model;

/**
 * Wawans\SismiopDatabase\Ref\RefKanwil
 *
 * @property string $kd_kanwil
 * @property string|null $nm_kanwil
 * @property string|null $al_kanwil
 * @property string|null $kota_terbit_kanwil
 * @property string|null $no_faksimili
 * @property string|null $no_telpon
 * @property-read mixed $alamat
 * @property-read mixed $faks
 * @property-read mixed $kota
 * @property-read mixed $nama
 * @property-read mixed $telp
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Wawans\SismiopDatabase\Ref\RefAdmKppbb> $refAdmKppbb
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Wawans\SismiopDatabase\Ref\RefAdminKppbb> $refAdminKppbb
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefKanwil newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefKanwil newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefKanwil query()
 *
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
        'kd_kanwil' => StrPad::class.':2',
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
