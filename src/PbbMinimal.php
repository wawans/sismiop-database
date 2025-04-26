<?php

namespace Wawans\SismiopDatabase;

/**
 * @property string $kd_propinsi KD_PROPINSI
 * @property string $kd_dati2 KD_DATI2
 * @property string $thn_pbb_minimal THN_PBB_MINIMAL
 * @property string|null $no_sk_pbb_minimal
 * @property string|null $tgl_sk_pbb_minimal
 * @property string|null $nilai_pbb_minimal NILAI_PBB_MINIMAL
 * @property string|null $tgl_rekam_pbb_minimal
 * @property string|null $nip_perekam_pbb_minimal
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PbbMinimal newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PbbMinimal newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PbbMinimal query()
 *
 * @mixin \Eloquent
 */
class PbbMinimal extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = [
        'kd_propinsi',
        'kd_dati2',
        'thn_pbb_minimal',
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
        'thn_pbb_minimal',
        'no_sk_pbb_minimal',
        'tgl_sk_pbb_minimal',
        'nilai_pbb_minimal',
        'tgl_rekam_pbb_minimal',
        'nip_perekam_pbb_minimal',
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
