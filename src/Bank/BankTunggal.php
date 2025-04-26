<?php

namespace Wawans\SismiopDatabase\Bank;

use Wawans\SismiopDatabase\Model;

/**
 * Wawans\SismiopDatabase\Bank\BankTunggal
 *
 * @property string $kd_kanwil
 * @property string $kd_kppbb
 * @property string $kd_bank_tunggal
 * @property string|null $nm_bank_tunggal
 * @property string|null $al_bank_tunggal
 * @property string|null $no_rek_bank_tunggal
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Wawans\SismiopDatabase\Bank\BankPersepsi> $bankPersepsi
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BankTunggal newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BankTunggal newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BankTunggal query()
 *
 * @mixin \Eloquent
 */
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
