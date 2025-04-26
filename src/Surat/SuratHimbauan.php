<?php

namespace Wawans\SismiopDatabase\Surat;

use Wawans\SismiopDatabase\Model;

/**
 * @property string $kd_kanwil
 * @property string $kd_kppbb
 * @property string $no_srt_himbauan
 * @property string $kd_propinsi
 * @property string $kd_dati2
 * @property string $kd_kecamatan
 * @property string $kd_kelurahan
 * @property string $kd_blok
 * @property string $no_urut
 * @property string $kd_jns_op
 * @property string|null $tgl_terbit_srt_himbauan
 * @property string|null $tgl_cetak_srt_himbauan
 * @property string|null $nip_pencetak_srt_himbauan
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SuratHimbauan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SuratHimbauan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SuratHimbauan query()
 *
 * @mixin \Eloquent
 */
class SuratHimbauan extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'srt_himbauan';

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
