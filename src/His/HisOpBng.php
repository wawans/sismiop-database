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
 * @property string $no_bng
 * @property string $his_indeks_op_bng
 * @property string|null $kd_jpb
 * @property string|null $his_no_formulir_op_bng
 * @property string|null $his_luas_bng
 * @property string|null $his_nilai_bng
 * @property string|null $his_tgl_perekaman_bng_awal
 * @property string|null $his_nip_perekam_bng_awal
 * @property string|null $sys_nc00016$
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|HisOpBng newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|HisOpBng newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|HisOpBng query()
 *
 * @mixin \Eloquent
 */
class HisOpBng extends Model
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
        'no_bng',
        'his_indeks_op_bng',
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
        'no_bng',
        'his_indeks_op_bng',
        'kd_jpb',
        'his_no_formulir_op_bng',
        'his_luas_bng',
        'his_nilai_bng',
        'his_tgl_perekaman_bng_awal',
        'his_nip_perekam_bng_awal',
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
