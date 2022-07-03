<?php

namespace Wawans\SismiopDatabase;

use Wawans\SismiopDatabase\Model;

/**
 * Wawans\SismiopDatabase\BankTunggal
 *
 * @property string $KD_KANWIL
 * @property string $KD_KPPBB
 * @property string $KD_BANK_TUNGGAL
 * @property string|null $NM_BANK_TUNGGAL
 * @property string|null $AL_BANK_TUNGGAL
 * @property string|null $NO_REK_BANK_TUNGGAL
 * @property-read \Illuminate\Database\Eloquent\Collection|\Wawans\SismiopDatabase\BankPersepsi[] $bankPersepsi
 * @method static \Illuminate\Database\Eloquent\Builder|BankTunggal newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BankTunggal newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BankTunggal query()
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
