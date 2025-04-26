<?php

namespace Wawans\SismiopDatabase\Skp;

use Wawans\SismiopDatabase\Model;

/**
 * @property string $kd_propinsi
 * @property string $kd_dati2
 * @property string $kd_kecamatan
 * @property string $kd_kelurahan
 * @property string $kd_blok
 * @property string $no_urut
 * @property string $kd_jns_op
 * @property string $thn_pajak_skp_spop
 * @property string|null $kd_kls_tanah
 * @property string|null $thn_awal_kls_tanah
 * @property string|null $kd_kls_bng
 * @property string|null $thn_awal_kls_bng
 * @property string|null $luas_bumi_beban_skp_spop
 * @property string|null $luas_bng_beban_skp_spop
 * @property string|null $njop_bumi_beban_skp_spop
 * @property string|null $njop_bng_beban_skp_spop
 * @property string|null $sys_nc00017$
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SkpSpopOpBersama newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SkpSpopOpBersama newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SkpSpopOpBersama query()
 *
 * @mixin \Eloquent
 */
class SkpSpopOpBersama extends Model
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
