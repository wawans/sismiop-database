<?php

namespace Wawans\SismiopDatabase;

/**
 * @property string $kd_pebin
 * @property string $kd_pbi
 * @property string $kd_ppbi
 * @property string $kd_upb
 * @property string $kd_kibt
 * @property string|null $untuk_pemakai
 * @property string|null $tahun
 * @property string|null $cara
 * @property string|null $luas_bumi
 * @property string|null $dari
 * @property string|null $harga
 * @property string|null $nilai_perolehan
 * @property string|null $kondisi
 * @property string|null $sumber_dana
 * @property string|null $dasar_harga
 * @property string|null $bukti_hak
 * @property string|null $kronologis_hak
 * @property string|null $digunakan
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AsetKibt newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AsetKibt newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AsetKibt query()
 *
 * @mixin \Eloquent
 */
class AsetKibt extends Model
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
        'kd_kibt',
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
        'kd_kibt',
        'untuk_pemakai',
        'tahun',
        'cara',
        'luas_bumi',
        'dari',
        'harga',
        'nilai_perolehan',
        'kondisi',
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
