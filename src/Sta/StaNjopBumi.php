<?php

namespace Wawans\SismiopDatabase\Sta;

use Wawans\SismiopDatabase\Model;

/**
 * @property string $kd_propinsi
 * @property string $kd_dati2
 * @property string $kd_kecamatan
 * @property string $kd_kelurahan
 * @property string $sta_thn_njop_bumi
 * @property string $kd_kls_tanah
 * @property string $thn_awal_kls_tanah
 * @property string|null $sta_total_op_bumi
 * @property string|null $sta_total_luas_bumi
 * @property string|null $sta_total_nilai_bumi
 * @property string|null $sta_njop_bumi
 * @property string|null $sys_nc00012$
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StaNjopBumi newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StaNjopBumi newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StaNjopBumi query()
 *
 * @mixin \Eloquent
 */
class StaNjopBumi extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id';

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
    protected $fillable = [];

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
