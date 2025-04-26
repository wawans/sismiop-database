<?php

namespace Wawans\SismiopDatabase;

/**
 * @property string $kd_propinsi
 * @property string $kd_dati2
 * @property string $kd_kecamatan
 * @property string $kd_kelurahan
 * @property string $kd_blok
 * @property string $no_urut
 * @property string $kd_jns_op
 * @property string $thn_pajak_sppt
 * @property string $pembayaran_sppt_ke
 * @property string|null $jns_pembayaran
 * @property string|null $no_srt_ketetapan
 * @property string|null $tgl_srt_ketetapan
 * @property string|null $ntpn
 * @property string|null $uraian_bayar_sppt
 * @property string|null $nm_penyetor
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SspPbbSppt newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SspPbbSppt newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SspPbbSppt query()
 *
 * @mixin \Eloquent
 */
class SspPbbSppt extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = [
        'kd_propinsi',
        'kd_dati2',
        'kd_kecamatan',
        'kd_kelurahan',
        'kd_blok',
        'no_urut',
        'kd_jns_op',
        'thn_pajak_sppt',
        'pembayaran_sppt_ke',
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
        'kd_propinsi',
        'kd_dati2',
        'kd_kecamatan',
        'kd_kelurahan',
        'kd_blok',
        'no_urut',
        'kd_jns_op',
        'thn_pajak_sppt',
        'pembayaran_sppt_ke',
        'jns_pembayaran',
        'no_srt_ketetapan',
        'tgl_srt_ketetapan',
        'ntpn',
        'uraian_bayar_sppt',
        'nm_penyetor',
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
