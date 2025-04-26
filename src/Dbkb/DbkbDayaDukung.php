<?php

namespace Wawans\SismiopDatabase\Dbkb;

use Wawans\SismiopDatabase\Model;

/**
 * @property string $kd_propinsi
 * @property string $kd_dati2
 * @property string $thn_dbkb_daya_dukung
 * @property string $type_konstruksi
 * @property string|null $nilai_dbkb_daya_dukung
 * @property string|null $sys_nc00006$
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DbkbDayaDukung newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DbkbDayaDukung newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DbkbDayaDukung query()
 *
 * @mixin \Eloquent
 */
class DbkbDayaDukung extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = [
        'kd_propinsi',
        'kd_dati2',
        'thn_dbkb_daya_dukung',
        'type_konstruksi',
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
        'thn_dbkb_daya_dukung',
        'type_konstruksi',
        'nilai_dbkb_daya_dukung',
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
