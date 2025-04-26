<?php

namespace Wawans\SismiopDatabase;

/**
 * @property string $kd_sektor
 * @property string $kd_propinsi
 * @property string $kd_dati2
 * @property string $tahun_pembagian
 * @property string $bulan_pembagian
 * @property string $minggu_ke_pembagian
 * @property string $pembagian_ke
 * @property string $kd_penerima
 * @property string|null $no_nota_debet_pembagian
 * @property string|null $tgl_nota_debet_pembagian
 * @property string|null $besar_pembagian
 * @property string|null $tgl_rekam_pembagian
 * @property string|null $nip_rekam_trm_bagi
 * @property string|null $sys_nc00014$
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TerimaPembagian newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TerimaPembagian newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TerimaPembagian query()
 *
 * @mixin \Eloquent
 */
class TerimaPembagian extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = [
        'kd_sektor',
        'kd_propinsi',
        'kd_dati2',
        'tahun_pembagian',
        'bulan_pembagian',
        'minggu_ke_pembagian',
        'pembagian_ke',
        'kd_penerima',
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
        'kd_sektor',
        'kd_propinsi',
        'kd_dati2',
        'tahun_pembagian',
        'bulan_pembagian',
        'minggu_ke_pembagian',
        'pembagian_ke',
        'kd_penerima',
        'no_nota_debet_pembagian',
        'tgl_nota_debet_pembagian',
        'besar_pembagian',
        'tgl_rekam_pembagian',
        'nip_rekam_trm_bagi',
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
