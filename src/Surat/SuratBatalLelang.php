<?php

namespace Wawans\SismiopDatabase\Surat;

use Wawans\SismiopDatabase\Model;

/**
 * @property string $kd_kanwil
 * @property string $kd_kppbb
 * @property string $no_srt_batal_lelang
 * @property string|null $no_pmt_jdl_lelang
 * @property string|null $alasan_batal_lelang
 * @property string|null $tgl_terbit_srt_batal_lelang
 * @property string|null $tgl_cetak_srt_batal_lelang
 * @property string|null $nip_pencetak_srt_batal_lelang
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SuratBatalLelang newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SuratBatalLelang newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SuratBatalLelang query()
 *
 * @mixin \Eloquent
 */
class SuratBatalLelang extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'srt_batal_lelang';

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
