<?php

namespace Wawans\SismiopDatabase\TempatPembayaran;

use Wawans\SismiopDatabase\Model;

/**
 * @property string $kd_propinsi
 * @property string $kd_dati2
 * @property string $kd_kecamatan
 * @property string $kd_kelurahan
 * @property string $thn_tp_sppt_masal
 * @property string|null $kd_kanwil
 * @property string|null $kd_kppbb
 * @property string|null $kd_bank_tunggal
 * @property string|null $kd_bank_persepsi
 * @property string|null $kd_tp
 * @property string|null $sys_nc00011$
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TempatPembayaranSpptMasal newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TempatPembayaranSpptMasal newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TempatPembayaranSpptMasal query()
 *
 * @mixin \Eloquent
 */
class TempatPembayaranSpptMasal extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = [
        'kd_propinsi',
        'kd_dati2',
        'kd_kecamatan',
        'kd_kelurahan',
        'thn_tp_sppt_masal',
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
        'kd_propinsi',
        'kd_dati2',
        'kd_kecamatan',
        'kd_kelurahan',
        'thn_tp_sppt_masal',
        'kd_kanwil',
        'kd_kppbb',
        'kd_bank_tunggal',
        'kd_bank_persepsi',
        'kd_tp',
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
