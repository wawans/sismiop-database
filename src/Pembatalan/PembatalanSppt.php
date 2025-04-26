<?php

namespace Wawans\SismiopDatabase\Pembatalan;

use Wawans\SismiopDatabase\Model;

/**
 * @property string $kd_propinsi
 * @property string $kd_dati2
 * @property string $kd_kecamatan
 * @property string $kd_kelurahan
 * @property string $kd_blok
 * @property string $no_urut
 * @property string $kd_jns_op
 * @property string $thn_pajak_sppt
 * @property string $pembatalan_sppt_ke
 * @property string|null $kd_batal
 * @property string|null $kd_kanwil_bank
 * @property string|null $kd_kppbb_bank
 * @property string|null $kd_bank_tunggal
 * @property string|null $kd_bank_persepsi
 * @property string|null $kd_tp
 * @property string|null $denda_sppt
 * @property string|null $jml_sppt_yg_dibatalkan
 * @property string|null $tgl_pembatalan_sppt
 * @property string|null $tgl_rekam_btl_sppt
 * @property string|null $nip_rekam_btl_sppt
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PembatalanSppt newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PembatalanSppt newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PembatalanSppt query()
 *
 * @mixin \Eloquent
 */
class PembatalanSppt extends Model
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
        'pembatalan_sppt_ke',
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
        'pembatalan_sppt_ke',
        'kd_batal',
        'kd_kanwil_bank',
        'kd_kppbb_bank',
        'kd_bank_tunggal',
        'kd_bank_persepsi',
        'kd_tp',
        'denda_sppt',
        'jml_sppt_yg_dibatalkan',
        'tgl_pembatalan_sppt',
        'tgl_rekam_btl_sppt',
        'nip_rekam_btl_sppt',
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
