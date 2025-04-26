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
 * @property string $tgl_terbit_stp
 * @property string|null $no_stp
 * @property string|null $kd_jns_ketetapan
 * @property string|null $no_srt_ketetapan
 * @property string|null $thn_pajak_ketetapan
 * @property string|null $pbb_ketetapan_awal
 * @property string|null $pengurangan_pbb
 * @property string|null $pengurangan_denda_skp
 * @property string|null $jml_pbb_telah_dibayar
 * @property string|null $jml_pbb_kurang_bayar
 * @property string|null $denda_stp
 * @property string|null $pengurangan_denda_sppt
 * @property string|null $pbb_yg_harus_dibayar_stp
 * @property string|null $kd_kanwil_bank
 * @property string|null $kd_kppbb_bank
 * @property string|null $kd_bank_tunggal
 * @property string|null $kd_bank_persepsi
 * @property string|null $kd_tp
 * @property string|null $tgl_jatuh_tempo_stp
 * @property string|null $status_pembayaran_stp
 * @property string|null $tgl_cetak_stp
 * @property string|null $nip_pencetak_stp
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stp newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stp newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stp query()
 *
 * @mixin \Eloquent
 */
class Stp extends Model
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
        'no_stp',
        'kd_jns_ketetapan',
        'no_srt_ketetapan',
        'thn_pajak_ketetapan',
        'pbb_ketetapan_awal',
        'pengurangan_pbb',
        'pengurangan_denda_skp',
        'jml_pbb_telah_dibayar',
        'jml_pbb_kurang_bayar',
        'denda_stp',
        'pengurangan_denda_sppt',
        'pbb_yg_harus_dibayar_stp',
        'kd_kanwil_bank',
        'kd_kppbb_bank',
        'kd_bank_tunggal',
        'kd_bank_persepsi',
        'kd_tp',
        'tgl_jatuh_tempo_stp',
        'status_pembayaran_stp',
        'tgl_cetak_stp',
        'nip_pencetak_stp',
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
