<?php

namespace Wawans\SismiopDatabase\TandaTerima;

use Wawans\SismiopDatabase\Model;

/**
 * @property string $kd_kanwil
 * @property string $kd_kppbb
 * @property string $no_srt_tegoran
 * @property string|null $tgl_terima_wp_srt_tegoran
 * @property string|null $nm_yg_menerima_srt_tegoran
 * @property string|null $tgl_rekam_ttr_srt_tegoran
 * @property string|null $nip_rekam_ttr_srt_tegoran
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TandaTerimaSuratTegoran newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TandaTerimaSuratTegoran newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TandaTerimaSuratTegoran query()
 *
 * @mixin \Eloquent
 */
class TandaTerimaSuratTegoran extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ttr_srt_tegoran';

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
