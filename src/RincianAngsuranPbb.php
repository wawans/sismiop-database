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
 * @property string $angsuran_ke
 * @property string|null $jml_pokok_angsuran
 * @property string|null $tgl_jatuh_tempo
 * @property string|null $jml_denda_adm
 * @property string|null $status_pembayaran
 * @property string|null $status_tagihan
 * @property string|null $tgl_rekam_angsuran
 * @property string|null $nip_perekam_angsuran
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RincianAngsuranPbb newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RincianAngsuranPbb newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RincianAngsuranPbb query()
 *
 * @mixin \Eloquent
 */
class RincianAngsuranPbb extends Model
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
        'angsuran_ke',
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
        'angsuran_ke',
        'jml_pokok_angsuran',
        'tgl_jatuh_tempo',
        'jml_denda_adm',
        'status_pembayaran',
        'status_tagihan',
        'tgl_rekam_angsuran',
        'nip_perekam_angsuran',
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
