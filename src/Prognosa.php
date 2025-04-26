<?php

namespace Wawans\SismiopDatabase;

/**
 * @property string $kd_sektor
 * @property string $kd_propinsi
 * @property string $kd_dati2
 * @property string $thn_anggaran_prognosa
 * @property string|null $jml_prognosa
 * @property string|null $tgl_rekam_prognosa
 * @property string|null $nip_rekam_trm_prognosa
 * @property string|null $sys_nc00008$
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Prognosa newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Prognosa newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Prognosa query()
 *
 * @mixin \Eloquent
 */
class Prognosa extends Model
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
        'thn_anggaran_prognosa',
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
        'thn_anggaran_prognosa',
        'jml_prognosa',
        'tgl_rekam_prognosa',
        'nip_rekam_trm_prognosa',
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
