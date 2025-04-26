<?php

namespace Wawans\SismiopDatabase\Surat;

use Wawans\SismiopDatabase\Model;

/**
 * @property string $kd_kanwil
 * @property string $kd_kppbb
 * @property string $no_srt_tegoran
 * @property string|null $kd_propinsi
 * @property string|null $kd_dati2
 * @property string|null $kd_kecamatan
 * @property string|null $kd_kelurahan
 * @property string|null $kd_blok
 * @property string|null $no_urut
 * @property string|null $kd_jns_op
 * @property string|null $thn_pajak_stp
 * @property string|null $tgl_terbit_srt_tegoran
 * @property string|null $tgl_cetak_srt_tegoran
 * @property string|null $nip_pencetak_srt_tegoran
 * @property string|null $sys_nc00015$
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SuratTegoran newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SuratTegoran newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SuratTegoran query()
 *
 * @mixin \Eloquent
 */
class SuratTegoran extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'srt_tegoran';

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
