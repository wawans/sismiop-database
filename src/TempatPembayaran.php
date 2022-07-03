<?php

namespace Wawans\SismiopDatabase;

use Wawans\SismiopDatabase\Casts\StrPad;
use Wawans\SismiopDatabase\Ref\RefKanwil;
use Wawans\SismiopDatabase\Ref\RefKppbb;

class TempatPembayaran extends Model
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
        'kd_tp',
    ];

    /**
     * The "type" of the primary key ID.
     *
     * @var string
     */
    protected $keyType = 'int';

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
        'kd_tp',
        'nm_tp',
        'alamat_tp',
        'no_rek_tp',
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
        'kd_kanwil' => StrPad::class . ':2',
        'kd_kppbb' => StrPad::class . ':2',
    ];

    public function refKanwil()
    {
        return $this->belongsTo(RefKanwil::class, 'kd_kanwil', 'kd_kanwil');
    }

    public function refKppbb()
    {
        return $this->belongsTo(RefKppbb::class, ['kd_kanwil', 'kd_kppbb'], ['kd_kanwil', 'kd_kppbb']);
    }

    public function bankTunggal()
    {
        return $this->belongsTo(BankTunggal::class, 'kd_bank_tunggal', 'kd_bank_tunggal');
    }

    public function bankPersepsi()
    {
        return $this->belongsTo(BankPersepsi::class,
            ['kd_bank_tunggal', 'kd_bank_persepsi'],
            ['kd_bank_tunggal','kd_bank_persepsi']);
    }

    public function getNamaAttribute()
    {
        return $this->nm_tp;
    }
}
