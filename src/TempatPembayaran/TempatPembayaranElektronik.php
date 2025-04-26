<?php

namespace Wawans\SismiopDatabase\TempatPembayaran;

use Wawans\SismiopDatabase\Model;

/**
 * @property string $kd_kanwil
 * @property string $kd_kppbb
 * @property string $kd_bank_tunggal
 * @property string $kd_bank_persepsi
 * @property string $kd_tp
 * @property string $kd_tampil
 * @property string|null $kd_urut_tampil
 * @property string|null $atm
 * @property string|null $teller
 * @property string|null $internet
 * @property string|null $phone
 * @property string|null $sms
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TempatPembayaranElektronik newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TempatPembayaranElektronik newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TempatPembayaranElektronik query()
 *
 * @mixin \Eloquent
 */
class TempatPembayaranElektronik extends Model
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
        'kd_tampil',
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
        'kd_tampil',
        'kd_urut_tampil',
        'atm',
        'teller',
        'internet',
        'phone',
        'sms',
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
}
