<?php

namespace Wawans\SismiopDatabase\TandaTerima;

use Wawans\SismiopDatabase\Model;

/**
 * @property string $kd_propinsi
 * @property string $kd_dati2
 * @property string $kd_kecamatan
 * @property string $kd_kelurahan
 * @property string $kd_blok
 * @property string $no_urut
 * @property string $kd_jns_op
 * @property string $tgl_terbit_stp
 * @property string|null $tgl_terima_wp_stp
 * @property string|null $nm_yg_menerima_stp
 * @property string|null $tgl_rekam_ttr_stp
 * @property string|null $nip_perekam_ttr_stp
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TandaTerimaStp newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TandaTerimaStp newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TandaTerimaStp query()
 *
 * @mixin \Eloquent
 */
class TandaTerimaStp extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ttr_stp';

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
