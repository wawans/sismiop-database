<?php

namespace Wawans\SismiopDatabase\Surat;

use Wawans\SismiopDatabase\Model;

/**
 * @property string $kd_kanwil
 * @property string $kd_kppbb
 * @property string $no_srt_paksa
 * @property string|null $no_srt_tegoran
 * @property string|null $no_ba_srt_paksa
 * @property string|null $tgl_terbit_srt_paksa
 * @property string|null $biaya_harian_juru_sita
 * @property string|null $biaya_perjalanan_juru_sita
 * @property string|null $tgl_cetak_srt_paksa
 * @property string|null $nip_pencetak_surat_paksa
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SuratPaksa newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SuratPaksa newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SuratPaksa query()
 *
 * @mixin \Eloquent
 */
class SuratPaksa extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'srt_paksa';

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
