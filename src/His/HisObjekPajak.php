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
 * @property string $his_indeks_op
 * @property string|null $subjek_pajak_id
 * @property string|null $his_status_cabang
 * @property string|null $his_status_wp
 * @property string|null $his_total_luas_bng
 * @property string|null $his_tgl_perekaman_awal
 * @property string|null $his_nip_perekam_op
 * @property string|null $his_no_formulir_spop
 * @property string|null $his_total_luas_bumi
 * @property string|null $his_njop_bumi
 * @property string|null $his_njop_bng
 * @property string|null $sys_nc00019$
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|HisObjekPajak newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|HisObjekPajak newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|HisObjekPajak query()
 *
 * @mixin \Eloquent
 */
class HisObjekPajak extends Model
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
        'his_indeks_op',
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
        'his_indeks_op',
        'subjek_pajak_id',
        'his_status_cabang',
        'his_status_wp',
        'his_total_luas_bng',
        'his_tgl_perekaman_awal',
        'his_nip_perekam_op',
        'his_no_formulir_spop',
        'his_total_luas_bumi',
        'his_njop_bumi',
        'his_njop_bng',
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
