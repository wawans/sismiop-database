<?php

namespace Wawans\SismiopDatabase;

/**
 * @property string $kd_pebin
 * @property string $kd_pbi
 * @property string $kd_ppbi
 * @property string $kd_upb
 * @property string $kd_kibb
 * @property string|null $untuk_pemakai
 * @property string|null $tahun
 * @property string|null $luas_bangunan
 * @property string|null $cara
 * @property string|null $dari
 * @property string|null $kondisi
 * @property string|null $harga
 * @property string|null $nilai_perolehan
 * @property string|null $sumber_dana
 * @property string|null $dasar_harga
 * @property string|null $bukti_hak
 * @property string|null $kronologis_hak
 * @property string|null $digunakan
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AsetKibb newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AsetKibb newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AsetKibb query()
 *
 * @mixin \Eloquent
 */
class AsetKibb extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = [
        'kd_pebin',
        'kd_pbi',
        'kd_ppbi',
        'kd_upb',
        'kd_kibb',
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
        'kd_pebin',
        'kd_pbi',
        'kd_ppbi',
        'kd_upb',
        'kd_kibb',
        'untuk_pemakai',
        'tahun',
        'luas_bangunan',
        'cara',
        'dari',
        'kondisi',
        'harga',
        'nilai_perolehan',
        'sumber_dana',
        'dasar_harga',
        'bukti_hak',
        'kronologis_hak',
        'digunakan',
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
