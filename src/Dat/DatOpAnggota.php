<?php

namespace Wawans\SismiopDatabase\Dat;

use Wawans\SismiopDatabase\Model;

/**
 * @property string $kd_propinsi_induk
 * @property string $kd_dati2_induk
 * @property string $kd_kecamatan_induk
 * @property string $kd_kelurahan_induk
 * @property string $kd_blok_induk
 * @property string $no_urut_induk
 * @property string $kd_jns_op_induk
 * @property string $kd_propinsi
 * @property string $kd_dati2
 * @property string $kd_kecamatan
 * @property string $kd_kelurahan
 * @property string $kd_blok
 * @property string $no_urut
 * @property string $kd_jns_op
 * @property string|null $luas_bumi_beban
 * @property string|null $luas_bng_beban
 * @property string|null $nilai_sistem_bumi_beban
 * @property string|null $nilai_sistem_bng_beban
 * @property string|null $njop_bumi_beban
 * @property string|null $njop_bng_beban
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DatOpAnggota newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DatOpAnggota newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DatOpAnggota query()
 *
 * @mixin \Eloquent
 */
class DatOpAnggota extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = [
        'kd_propinsi_induk',
        'kd_dati2_induk',
        'kd_kecamatan_induk',
        'kd_kelurahan_induk',
        'kd_blok_induk',
        'no_urut_induk',
        'kd_jns_op_induk',
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
        'kd_propinsi_induk',
        'kd_dati2_induk',
        'kd_kecamatan_induk',
        'kd_kelurahan_induk',
        'kd_blok_induk',
        'no_urut_induk',
        'kd_jns_op_induk',
        'kd_propinsi',
        'kd_dati2',
        'kd_kecamatan',
        'kd_keluraha',
        'kd_blok',
        'no_urut',
        'kd_jns_op',
        'luas_bumi_beban',
        'luas_bng_beban',
        'nilai_sistem_bumi_beban',
        'nilai_sistem_bng_beban',
        'njop_bumi_beban',
        'njop_bng_beban',
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
