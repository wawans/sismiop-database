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
 * @property string $no_bumi
 * @property string $his_indeks_op_bumi
 * @property string|null $his_luas_bumi
 * @property string|null $his_jns_bumi
 * @property string|null $his_nilai_sistem_bumi
 * @property string|null $his_kd_znt
 * @property string|null $sys_nc00014$
 * @property string|null $sys_nc00015$
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|HisOpBumi newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|HisOpBumi newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|HisOpBumi query()
 *
 * @mixin \Eloquent
 */
class HisOpBumi extends Model
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
        'no_bumi',
        'his_indeks_op_bumi',
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
        'no_bumi',
        'his_indeks_op_bumi',
        'his_luas_bumi',
        'his_jns_bumi',
        'his_nilai_sistem_bumi',
        'his_kd_znt',
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
