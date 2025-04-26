<?php

namespace Wawans\SismiopDatabase\Sppt;

use Wawans\SismiopDatabase\Model;

/**
 * @property string $kd_propinsi
 * @property string $kd_dati2
 * @property string $kd_kecamatan
 * @property string $kd_kelurahan
 * @property string $kd_blok
 * @property string $no_urut
 * @property string $kd_jns_op
 * @property string $thn_pajak_sppt
 * @property string $kd_kls_tanah
 * @property string $thn_awal_kls_tanah
 * @property string $kd_kls_bng
 * @property string $thn_awal_kls_bng
 * @property string $luas_bumi_beban_sppt
 * @property string $luas_bng_beban_sppt
 * @property string $njop_bumi_beban_sppt
 * @property string $njop_bng_beban_sppt
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SpptOpBersama newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SpptOpBersama newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SpptOpBersama query()
 *
 * @mixin \Eloquent
 */
class SpptOpBersama extends Model
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
