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
 * @property string|null $no_sk_angsuran
 * @property string|null $tgl_sk_angsuran
 * @property string|null $nm_pemohon
 * @property string|null $no_srt_permohonan
 * @property string|null $tgl_srt_permohonan
 * @property string|null $jns_ketetapan
 * @property string|null $no_srt_ketetapan
 * @property string|null $pbb_terutang
 * @property string|null $no_tanda_terima
 * @property string|null $tgl_tanda_terima
 * @property string|null $no_lap_penelitian
 * @property string|null $tgl_lap_penelitian
 * @property string|null $tgl_rekam_sk_angsuran
 * @property string|null $nip_perekam_sk_angsuran
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KeputusanAngsuranPbb newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KeputusanAngsuranPbb newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KeputusanAngsuranPbb query()
 *
 * @mixin \Eloquent
 */
class KeputusanAngsuranPbb extends Model
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
        'no_sk_angsuran',
        'tgl_sk_angsuran',
        'nm_pemohon',
        'no_srt_permohonan',
        'tgl_srt_permohonan',
        'jns_ketetapan',
        'no_srt_ketetapan',
        'pbb_terutang',
        'no_tanda_terima',
        'tgl_tanda_terima',
        'no_lap_penelitian',
        'tgl_lap_penelitian',
        'tgl_rekam_sk_angsuran',
        'nip_perekam_sk_angsuran',
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
