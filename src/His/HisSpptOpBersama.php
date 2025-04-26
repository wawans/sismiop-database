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
 * @property string $thn_pajak_sppt
 * @property string $his_indeks_perubahan_sppt
 * @property string|null $his_luas_bumi_beban_sppt
 * @property string|null $his_luas_bng_beban_sppt
 * @property string|null $his_njop_bumi_beban_sppt
 * @property string|null $his_njop_bng_beban_sppt
 * @property string|null $sys_nc00014$
 * @property string|null $sys_nc00015$
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|HisSpptOpBersama newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|HisSpptOpBersama newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|HisSpptOpBersama query()
 *
 * @mixin \Eloquent
 */
class HisSpptOpBersama extends Model
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
        'thn_pajak_sppt',
        'his_indeks_perubahan_sppt',
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
        'thn_pajak_sppt',
        'his_indeks_perubahan_sppt',
        'his_luas_bumi_beban_sppt',
        'his_luas_bng_beban_sppt',
        'his_njop_bumi_beban_sppt',
        'his_njop_bng_beban_sppt',
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
