<?php

namespace Wawans\SismiopDatabase\His;

use Wawans\SismiopDatabase\Model;

/**
 * @property string $kd_propinsi
 * @property string $kd_dati2
 * @property string $kd_kecamatan
 * @property string $kd_kelurahan
 * @property string $kd_blok
 * @property string $no_urut
 * @property string $kd_jns_op
 * @property string|null $his_kd_propinsi_induk
 * @property string|null $his_kd_dati2_induk
 * @property string|null $his_kd_kecamatan_induk
 * @property string|null $his_kd_kelurahan_induk
 * @property string|null $his_kd_blok_induk
 * @property string|null $his_no_urut_induk
 * @property string|null $his_kd_jns_op_induk
 * @property string|null $his_luas_bumi_beban
 * @property string|null $his_luas_bng_beban
 * @property string|null $his_nilai_bumi_beban
 * @property string|null $his_nilai_bng_beban
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|HisOpAnggota newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|HisOpAnggota newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|HisOpAnggota query()
 *
 * @mixin \Eloquent
 */
class HisOpAnggota extends Model
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
        'his_kd_propinsi_induk',
        'his_kd_dati2_induk',
        'his_kd_kecamatan_induk',
        'his_kd_kelurahan_induk',
        'his_kd_blok_induk',
        'his_no_urut_induk',
        'his_kd_jns_op_induk',
        'his_luas_bumi_beban',
        'his_luas_bng_beban',
        'his_nilai_bumi_beban',
        'his_nilai_bng_beban',
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
