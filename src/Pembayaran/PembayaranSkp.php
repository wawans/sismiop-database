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
 * @property string $thn_pajak_skp
 * @property string $tgl_terbit_skp
 * @property string $pembayaran_skp_ke
 * @property string|null $kd_kanwil_bank
 * @property string|null $kd_kppbb_bank
 * @property string|null $kd_bank_tunggal
 * @property string|null $kd_bank_persepsi
 * @property string|null $kd_tp
 * @property string|null $tgl_pembayaran_skp
 * @property string|null $ntpn
 * @property string|null $denda_skp
 * @property string|null $jml_skp_yg_dibayar
 * @property string|null $uraian_bayar_skp
 * @property string|null $nm_penyetor
 * @property string|null $tgl_rekam_byr_skp
 * @property string|null $nip_perekam_byr_skp
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PembayaranSkp newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PembayaranSkp newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PembayaranSkp query()
 *
 * @mixin \Eloquent
 */
class PembayaranSkp extends Model
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
        'thn_pajak_skp',
        'tgl_terbit_skp',
        'pembayaran_skp_ke',
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
        'thn_pajak_skp',
        'tgl_terbit_skp',
        'pembayaran_skp_ke',
        'kd_kanwil_bank',
        'kd_kppbb_bank',
        'kd_bank_tunggal',
        'kd_bank_persepsi',
        'kd_tp',
        'tgl_pembayaran_skp',
        'ntpn',
        'denda_skp',
        'jml_skp_yg_dibayar',
        'uraian_bayar_skp',
        'nm_penyetor',
        'tgl_rekam_byr_skp',
        'nip_perekam_byr_skp',
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
