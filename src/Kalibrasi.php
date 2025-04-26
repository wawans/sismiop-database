<?php

namespace Wawans\SismiopDatabase;

/**
 * @property string $kd_propinsi
 * @property string $kd_dati2
 * @property string $kd_kecamatan
 * @property string $kd_kelurahan
 * @property string $thn_kalibrasi
 * @property string $indeks_kalibrasi
 * @property string|null $tgl_kalibrasi
 * @property string|null $nip_pengkalibrasi
 * @property string|null $sys_nc00009$
 * @property string|null $sys_nc00010$
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Kalibrasi newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Kalibrasi newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Kalibrasi query()
 *
 * @mixin \Eloquent
 */
class Kalibrasi extends Model
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
        'thn_kalibrasi',
        'indeks_kalibrasi',
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
        'thn_kalibrasi',
        'indeks_kalibrasi',
        'tgl_kalibrasi',
        'nip_pengkalibrasi',
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
