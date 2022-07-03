<?php

namespace Wawans\SismiopDatabase;

use Wawans\SismiopDatabase\Dat\DatLogin;
use Wawans\SismiopDatabase\Model;

/**
 * Wawans\SismiopDatabase\Pegawai
 *
 * @property string $NIP
 * @property string|null $NM_PEGAWAI
 * @property string|null $NIP_BARU
 * @property-read DatLogin|null $datLogin
 * @property-read mixed $nama
 * @property-read \Wawans\SismiopDatabase\PosisiPegawai|null $posisi
 * @property-read \Illuminate\Database\Eloquent\Collection|\Wawans\SismiopDatabase\PosisiPegawai[] $posisiPegawai
 * @method static \Illuminate\Database\Eloquent\Builder|Pegawai newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Pegawai newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Pegawai query()
 * @mixin \Eloquent
 */
class Pegawai extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'nip';

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
        'nip',
        'nm_pegawai',
        'nip_baru',
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
    protected $casts = [];

    public function datLogin()
    {
        return $this->hasOne(DatLogin::class, $this->primaryKey, $this->primaryKey);
    }

    public function posisi()
    {
        return $this->hasOne(PosisiPegawai::class, $this->primaryKey, $this->primaryKey)->whereActive();
    }

    public function posisiPegawai()
    {
        return $this->hasMany(PosisiPegawai::class, $this->primaryKey, $this->primaryKey);
    }

    public function getNamaAttribute()
    {
        return $this->nm_pegawai;
    }
}
