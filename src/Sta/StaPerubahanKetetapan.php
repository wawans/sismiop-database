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
 * @property string $thn_pajak_perubahan
 * @property string|null $total_op_perubahan
 * @property string|null $total_luas_bumi_perubahan
 * @property string|null $total_luas_bng_perubahan
 * @property string|null $total_pbb_perubahan
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StaPerubahanKetetapan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StaPerubahanKetetapan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StaPerubahanKetetapan query()
 *
 * @mixin \Eloquent
 */
class StaPerubahanKetetapan extends Model
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
