<?php

namespace Wawans\SismiopDatabase\Surat;

use Wawans\SismiopDatabase\Model;

/**
 * @property string $kd_kanwil
 * @property string $kd_kppbb
 * @property string $no_srt_cabut_sita
 * @property string|null $no_spmp
 * @property string|null $alasan_cabut_sita
 * @property string|null $tgl_terbit_srt_cabut_sita
 * @property string|null $tgl_cetak_srt_cabut_sita
 * @property string|null $nip_pencetak_srt_cabut_sita
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SuratCabutSita newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SuratCabutSita newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SuratCabutSita query()
 *
 * @mixin \Eloquent
 */
class SuratCabutSita extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'srt_cabut_sita';

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
