<?php

namespace Wawans\SismiopDatabase\Sta;

use Wawans\SismiopDatabase\Model;

/**
 * @property string $indeks_range
 * @property string $kd_jns_range
 * @property string $kd_buku
 * @property string $kd_propinsi
 * @property string $kd_dati2
 * @property string $kd_kecamatan
 * @property string $kd_kelurahan
 * @property string $sta_thn_bayar
 * @property string|null $sta_op_bayar
 * @property string|null $sta_denda_bayar
 * @property string|null $sta_pbb_bayar
 * @property string|null $sys_nc00012$
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StaPokokBayar newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StaPokokBayar newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StaPokokBayar query()
 *
 * @mixin \Eloquent
 */
class StaPokokBayar extends Model
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
