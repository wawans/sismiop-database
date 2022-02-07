<?php

namespace Wawans\SismiopDatabase;

use Wawans\SismiopDatabase\Model;

class BankTunggal extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = [
        'kd_kanwil',
        'kd_kppbb',
        'kd_bank_tunggal',
    ];

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
        'kd_kanwil',
        'kd_kppbb',
        'kd_bank_tunggal',
        'nm_bank_tunggal',
        'al_bank_tunggal',
        'no_rek_bank_tunggal',
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

    public function bankPersepsi()
    {
        return $this->hasMany(BankPersepsi::class, $this->primaryKey, $this->primaryKey);
    }
}
