<?php

namespace Wawans\SismiopDatabase\Pembayaran;

use Wawans\SismiopDatabase\Model;

/**
 * @property string $kd_propinsi
 * @property string $kd_dati2
 * @property string $kd_kecamatan
 * @property string $kd_kelurahan
 * @property string $kd_blok
 * @property string $no_urut
 * @property string $kd_jns_op
 * @property string $tgl_terbit_stp
 * @property string $pembayaran_stp_ke
 * @property string|null $kd_kanwil_bank
 * @property string|null $kd_kppbb_bank
 * @property string|null $kd_bank_tunggal
 * @property string|null $kd_bank_persepsi
 * @property string|null $kd_tp
 * @property string|null $tgl_pembayaran_stp
 * @property string|null $ntpn
 * @property string|null $denda_stp
 * @property string|null $jml_stp_yg_dibayar
 * @property string|null $uraian_bayar_stp
 * @property string|null $nm_penyetor
 * @property string|null $tgl_rekam_byr_stp
 * @property string|null $nip_perekam_byr_stp
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PembayaranStp newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PembayaranStp newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PembayaranStp query()
 *
 * @mixin \Eloquent
 */
class PembayaranStp extends Model
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
        'tgl_terbit_stp',
        'pembayaran_stp_ke',
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
        'tgl_terbit_stp',
        'pembayaran_stp_ke',
        'kd_kanwil_bank',
        'kd_kppbb_bank',
        'kd_bank_tunggal',
        'kd_bank_persepsi',
        'kd_tp',
        'tgl_pembayaran_stp',
        'ntpn',
        'denda_stp',
        'jml_stp_yg_dibayar',
        'uraian_bayar_stp',
        'nm_penyetor',
        'tgl_rekam_byr_stp',
        'nip_perekam_byr_stp',
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
