<?php

namespace Wawans\SismiopDatabase\TempatPembayaran;

use Wawans\SismiopDatabase\Model;

/**
 * @property string $kd_propinsi
 * @property string $kd_dati2
 * @property string $kd_kecamatan
 * @property string $kd_kelurahan
 * @property string $kd_blok
 * @property string $no_urut
 * @property string $kd_jns_op
 * @property string|null $thn_tp_khusus
 * @property string|null $kd_kanwil
 * @property string|null $kd_kppbb
 * @property string|null $kd_bank_tunggal
 * @property string|null $kd_bank_persepsi
 * @property string|null $kd_tp
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TempatBayarKhusus newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TempatBayarKhusus newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TempatBayarKhusus query()
 *
 * @mixin \Eloquent
 */
class TempatBayarKhusus extends Model
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
        'kd_blok',
        'no_urut',
        'kd_jns_op',
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
        'kd_blok',
        'no_urut',
        'kd_jns_op',
        'thn_tp_khusus',
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
