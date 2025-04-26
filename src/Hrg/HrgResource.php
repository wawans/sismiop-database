<?php

namespace Wawans\SismiopDatabase\Hrg;

use Wawans\SismiopDatabase\Model;

/**
 * @property string $kd_propinsi
 * @property string $kd_dati2
 * @property string $thn_hrg_resource
 * @property string $kd_group_resource
 * @property string $kd_resource
 * @property string|null $kd_kanwil
 * @property string|null $kd_kppbb
 * @property string|null $jns_dokumen
 * @property string|null $no_dokumen
 * @property string|null $hrg_resource
 * @property string|null $sys_nc00011$
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|HrgResource newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|HrgResource newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|HrgResource query()
 *
 * @mixin \Eloquent
 */
class HrgResource extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = [
        'kd_propinsi',
        'kd_dati2',
        'thn_hrg_resource',
        'kd_group_resource',
        'kd_resource',
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
        'thn_hrg_resource',
        'kd_group_resource',
        'kd_resource',
        'kd_kanwil',
        'kd_kppbb',
        'jns_dokumen',
        'no_dokumen',
        'hrg_resource',
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
