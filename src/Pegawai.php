<?php

namespace Wawans\SismiopDatabase;

use Wawans\SismiopDatabase\Dat\DatLogin;

/**
 * Wawans\SismiopDatabase\Pegawai
 *
 * @property string $nip
 * @property string|null $nm_pegawai
 * @property string|null $nip_baru
 * @property-read DatLogin|null $datLogin
 * @property-read mixed $nama
 * @property-read \Wawans\SismiopDatabase\PosisiPegawai|null $posisi
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Wawans\SismiopDatabase\PosisiPegawai> $posisiPegawai
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Pegawai newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Pegawai newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Pegawai query()
 *
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
