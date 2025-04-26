<?php

namespace Wawans\SismiopDatabase\Sta;

use Wawans\SismiopDatabase\Model;

/**
 * @property string $kd_propinsi
 * @property string $kd_dati2
 * @property string $kd_kecamatan
 * @property string $kd_kelurahan
 * @property string $sta_thn_njop_bng
 * @property string $kd_jpb
 * @property string $kd_kls_bng
 * @property string $thn_awal_kls_bng
 * @property string|null $sta_total_op_bng
 * @property string|null $sta_total_luas_bng
 * @property string|null $sta_total_nilai_bng
 * @property string|null $sta_njop_bng
 * @property string|null $sys_nc00013$
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StaNjopBng newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StaNjopBng newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StaNjopBng query()
 *
 * @mixin \Eloquent
 */
class StaNjopBng extends Model
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
