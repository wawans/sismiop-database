<?php

namespace Wawans\SismiopDatabase\Dbkb;

use Wawans\SismiopDatabase\Model;

/**
 * @property string $kd_propinsi
 * @property string $kd_dati2
 * @property string $thn_dbkb_material
 * @property string $kd_pekerjaan
 * @property string $kd_kegiatan
 * @property string|null $nilai_dbkb_material
 * @property string|null $sys_nc00007$
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DbkbMaterial newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DbkbMaterial newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DbkbMaterial query()
 *
 * @mixin \Eloquent
 */
class DbkbMaterial extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = [
        'kd_propinsi',
        'kd_dati2',
        'thn_dbkb_material',
        'kd_pekerjaan',
        'kd_kegiatan',
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
        'thn_dbkb_material',
        'kd_pekerjaan',
        'kd_kegiatan',
        'nilai_dbkb_material',
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
