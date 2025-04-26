<?php

namespace Wawans\SismiopDatabase\Ref;

use Wawans\SismiopDatabase\Casts\StrFn;
use Wawans\SismiopDatabase\Model;

/**
 * Wawans\SismiopDatabase\Ref\RefKppbb
 *
 * @property string $kd_kanwil
 * @property string $kd_kppbb
 * @property string|null $nm_kppbb
 * @property string|null $al_kppbb
 * @property string|null $kota_terbit_kppbb
 * @property string|null $no_faksimili
 * @property string|null $no_telpon
 * @property string|null $nm_lengkap_kppbb
 * @property string|null $nm_singkat_kppbb
 * @property-read mixed $alamat
 * @property-read mixed $faks
 * @property-read mixed $kota
 * @property-read mixed $nama
 * @property-read mixed $nama_lengkap
 * @property-read mixed $nama_singkat
 * @property-read mixed $telp
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Wawans\SismiopDatabase\Ref\RefAdmKppbb> $refAdmKppbb
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Wawans\SismiopDatabase\Ref\RefAdminKppbb> $refAdminKppbb
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefKppbb newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefKppbb newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefKppbb query()
 *
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
        'nm_kppbb' => StrFn::class.':strtoupper',
        'al_kppbb' => StrFn::class.':strtoupper',
        'kota_terbit_kppbb' => StrFn::class.':strtoupper',
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
