<?php

namespace Wawans\SismiopDatabase;

/**
 * @property string $kd_propinsi
 * @property string $kd_dati2
 * @property string $kd_kecamatan
 * @property string $kd_kelurahan
 * @property string $thn_cetak_masal
 * @property string $indeks_cetak_masal
 * @property string|null $tgl_cetak_masal
 * @property string|null $nip_pencetak_masal
 * @property string|null $jml_sppt
 * @property string|null $jml_pbb_yg_harus_dibayar
 * @property string|null $sys_nc00011$
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CetakMasal newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CetakMasal newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CetakMasal query()
 *
 * @mixin \Eloquent
 */
class CetakMasal extends Model
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
        'thn_cetak_masal',
        'indeks_cetak_masal',
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
        'thn_cetak_masal',
        'indeks_cetak_masal',
        'tgl_cetak_masal',
        'nip_pencetak_masal',
        'jml_sppt',
        'jml_pbb_yg_harus_dibayar',
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
