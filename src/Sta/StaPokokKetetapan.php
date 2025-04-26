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
 * @property string $thn_pajak_ketetapan
 * @property string|null $total_op_pokok
 * @property string|null $total_luas_bumi_pokok
 * @property string|null $total_luas_bng_pokok
 * @property string|null $total_pbb_pokok
 * @property string|null $sys_nc00013$
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StaPokokKetetapan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StaPokokKetetapan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StaPokokKetetapan query()
 *
 * @mixin \Eloquent
 */
class StaPokokKetetapan extends Model
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
