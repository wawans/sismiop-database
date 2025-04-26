<?php

namespace Wawans\SismiopDatabase\Surat;

use Wawans\SismiopDatabase\Model;

/**
 * @property string $kd_kanwil
 * @property string $kd_kppbb
 * @property string $no_spmp
 * @property string|null $no_srt_paksa
 * @property string|null $tgl_terbit_spmp
 * @property string|null $status_segel_sita
 * @property string|null $nip_juru_sita
 * @property string|null $tgl_cetak_spmp
 * @property string|null $nip_pencetak_spmp
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SuratPerintahSita newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SuratPerintahSita newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SuratPerintahSita query()
 *
 * @mixin \Eloquent
 */
class SuratPerintahSita extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'srt_perintah_sita';

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
