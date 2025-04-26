<?php

namespace Wawans\SismiopDatabase;

/**
 * @property string $kd_kanwil
 * @property string $kd_kppbb
 * @property string $no_pmt_jdl_lelang
 * @property string|null $no_spmp
 * @property string|null $kd_kantor_lelang
 * @property string|null $tgl_srt_pmt_jdl_lelang
 * @property string|null $tgl_pmt_pelelangan
 * @property string|null $status_lelang
 * @property string|null $tgl_pelelangan
 * @property string|null $tempat_pelelangan
 * @property string|null $tgl_cetak_srt_pmt_jdl_lelang
 * @property string|null $nip_pencetak_srt_pmt_jdl_llg
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PermintaanJadualLelang newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PermintaanJadualLelang newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PermintaanJadualLelang query()
 *
 * @mixin \Eloquent
 */
class PermintaanJadualLelang extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = [
        'kd_kanwil',
        'kd_kppbb',
        'no_pmt_jdl_lelang',
    ];

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
    protected $fillable = [
        'kd_kanwil',
        'kd_kppbb',
        'no_pmt_jdl_lelang',
        'no_spmp',
        'kd_kantor_lelang',
        'tgl_srt_pmt_jdl_lelang',
        'tgl_pmt_pelelangan',
        'status_lelang',
        'tgl_pelelangan',
        'tempat_pelelangan',
        'tgl_cetak_srt_pmt_jdl_lelang',
        'nip_pencetak_srt_pmt_jdl_llg',
    ];

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
