<?php

namespace Wawans\SismiopDatabase;

/**
 * @property string $kd_sektor
 * @property string $kd_propinsi
 * @property string $kd_dati2
 * @property string $tahun_penerimaan
 * @property string $bulan_penerimaan
 * @property string $minggu_ke_penerimaan
 * @property string $penerimaan_ke
 * @property string|null $jns_penerimaan
 * @property string|null $besar_penerimaan
 * @property string|null $tgl_rekam_penerimaan
 * @property string|null $nip_rekam_trm_penerimaan
 * @property string|null $sys_nc00012$
 * @property string|null $sys_nc00013$
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Penerimaan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Penerimaan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Penerimaan query()
 *
 * @mixin \Eloquent
 */
class Penerimaan extends Model
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
        'tahun_penerimaan',
        'bulan_penerimaan',
        'minggu_ke_penerimaan',
        'penerimaan_ke',
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
        'tahun_penerimaan',
        'bulan_penerimaan',
        'minggu_ke_penerimaan',
        'penerimaan_ke',
        'jns_penerimaan',
        'besar_penerimaan',
        'tgl_rekam_penerimaan',
        'nip_rekam_trm_penerimaan',
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
