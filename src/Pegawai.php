<?php

namespace Wawans\SismiopDatabase;

use Wawans\SismiopDatabase\Dat\DatLogin;
use Wawans\SismiopDatabase\Model;

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
