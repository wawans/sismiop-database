<?php

namespace Wawans\SismiopDatabase\Bank;

use Wawans\SismiopDatabase\Model;

/**
 * Wawans\SismiopDatabase\Bank\BankPersepsi
 *
 * @property string $kd_kanwil
 * @property string $kd_kppbb
 * @property string $kd_bank_tunggal
 * @property string $kd_bank_persepsi
 * @property string|null $nm_bank_persepsi
 * @property string|null $al_bank_persepsi
 * @property string|null $no_rek_bank_persepsi
 * @property-read \Wawans\SismiopDatabase\Bank\BankTunggal|null $bankTunggal
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BankPersepsi newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BankPersepsi newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BankPersepsi query()
 *
 * @mixin \Eloquent
 */
class BankPersepsi extends Model
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
        'kd_bank_persepsi',
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
        'kd_bank_persepsi',
        'nm_bank_persepsi',
        'al_bank_persepsi',
        'no_rek_bank_persepsi',
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

    public function bankTunggal()
    {
        return $this->belongsTo(BankTunggal::class, $this->primaryKey, $this->primaryKey);
    }
}
