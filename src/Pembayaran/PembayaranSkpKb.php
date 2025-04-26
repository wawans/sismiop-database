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
 * @property string $thn_pajak_skp_kb
 * @property string $pembayaran_skp_kb_ke
 * @property string|null $kd_kanwil_bank
 * @property string|null $kd_kppbb_bank
 * @property string|null $kd_bank_tunggal
 * @property string|null $kd_bank_persepsi
 * @property string|null $kd_tp
 * @property string|null $denda_skp_kb
 * @property string|null $jml_skp_kb_yg_dibayar
 * @property string|null $tgl_pembayaran_skp_kb
 * @property string|null $tgl_rekam_byr_skp_kb
 * @property string|null $nip_perekam_byr_skp_kb
 * @property string|null $sys_nc00020$
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PembayaranSkpKb newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PembayaranSkpKb newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PembayaranSkpKb query()
 *
 * @mixin \Eloquent
 */
class PembayaranSkpKb extends Model
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
        'thn_pajak_skp_kb',
        'pembayaran_skp_kb_ke',
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
        'thn_pajak_skp_kb',
        'pembayaran_skp_kb_ke',
        'kd_kanwil_bank',
        'kd_kppbb_bank',
        'kd_bank_tunggal',
        'kd_bank_persepsi',
        'kd_tp',
        'denda_skp_kb',
        'jml_skp_kb_yg_dibayar',
        'tgl_pembayaran_skp_kb',
        'tgl_rekam_byr_skp_kb',
        'nip_perekam_byr_skp_kb',
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
