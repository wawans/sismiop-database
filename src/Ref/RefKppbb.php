<?php

namespace Wawans\SismiopDatabase\Ref;

use Wawans\SismiopDatabase\Casts\StrFn;
use Wawans\SismiopDatabase\Model;

/**
 * Wawans\SismiopDatabase\Ref\RefKppbb
 *
 * @property string $KD_KANWIL
 * @property string $KD_KPPBB
 * @property string|null $NM_KPPBB
 * @property string|null $AL_KPPBB
 * @property string|null $KOTA_TERBIT_KPPBB
 * @property string|null $NO_FAKSIMILI
 * @property string|null $NO_TELPON
 * @property string|null $NM_LENGKAP_KPPBB
 * @property string|null $NM_SINGKAT_KPPBB
 * @property StrFn $nm_kppbb
 * @property StrFn $al_kppbb
 * @property StrFn $kota_terbit_kppbb
 * @property-read mixed $alamat
 * @property-read mixed $faks
 * @property-read mixed $kota
 * @property-read mixed $nama
 * @property-read mixed $nama_lengkap
 * @property-read mixed $nama_singkat
 * @property-read mixed $telp
 * @property-read \Illuminate\Database\Eloquent\Collection|\Wawans\SismiopDatabase\Ref\RefAdmKppbb[] $refAdmKppbb
 * @property-read \Illuminate\Database\Eloquent\Collection|\Wawans\SismiopDatabase\Ref\RefAdminKppbb[] $refAdminKppbb
 * @method static \Illuminate\Database\Eloquent\Builder|RefKppbb newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RefKppbb newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RefKppbb query()
 * @mixin \Eloquent
 */
class RefKppbb extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = ['kd_kanwil', 'kd_kppbb'];

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
        'nm_kppbb',
        'al_kppbb',
        'kota_terbit_kppbb',
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
        'nm_kppbb' => StrFn::class . ':strtoupper',
        'al_kppbb' => StrFn::class . ':strtoupper',
        'kota_terbit_kppbb' => StrFn::class . ':strtoupper',
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
        return $this->nm_kppbb;
    }

    public function getNamaLengkapAttribute()
    {
        return $this->nm_lengkap_kppbb ?? $this->nm_kppbb;
    }

    public function getNamaSingkatAttribute()
    {
        return $this->nm_singkat_kppbb ?? $this->nm_kppbb;
    }

    public function getAlamatAttribute()
    {
        return $this->al_kppbb;
    }

    public function getKotaAttribute()
    {
        return $this->kota_terbit_kppbb;
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
