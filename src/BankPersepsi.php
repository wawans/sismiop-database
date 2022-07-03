<?php

namespace Wawans\SismiopDatabase;

use Wawans\SismiopDatabase\Model;

/**
 * Wawans\SismiopDatabase\BankPersepsi
 *
 * @property string $KD_KANWIL
 * @property string $KD_KPPBB
 * @property string $KD_BANK_TUNGGAL
 * @property string $KD_BANK_PERSEPSI
 * @property string|null $NM_BANK_PERSEPSI
 * @property string|null $AL_BANK_PERSEPSI
 * @property string|null $NO_REK_BANK_PERSEPSI
 * @property-read \Wawans\SismiopDatabase\BankTunggal $bankTunggal
 * @method static \Illuminate\Database\Eloquent\Builder|BankPersepsi newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BankPersepsi newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BankPersepsi query()
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
