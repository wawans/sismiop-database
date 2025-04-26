<?php

namespace Wawans\SismiopDatabase\His;

use Wawans\SismiopDatabase\Model;

/**
 * @property string $kd_propinsi
 * @property string $kd_dati2
 * @property string $kd_kecamatan
 * @property string $kd_kelurahan
 * @property string $kd_blok
 * @property string $no_urut
 * @property string $kd_jns_op
 * @property string $thn_pajak_stp
 * @property string $indeks_perubahan_stp
 * @property string|null $kd_kanwil
 * @property string|null $kd_kppbb
 * @property string|null $jns_sk
 * @property string|null $no_sk
 * @property string|null $his_kd_bank_tunggal
 * @property string|null $his_kd_bank_persepsi
 * @property string|null $his_kd_tp
 * @property string|null $his_tgl_jatuh_tempo_stp
 * @property string|null $his_tgl_terbit_stp
 * @property string|null $his_sisa_pajak_terhutang_stp
 * @property string|null $his_jml_lambat_bulan_denda_stp
 * @property string|null $his_rupiah_denda_stp
 * @property string|null $his_jml_pajak_terhutang_stp
 * @property string|null $his_persetujuan_stp_kp_pbb
 * @property string|null $his_kd_jns_ketetapan
 * @property string|null $his_tgl_cetak_stp
 * @property string|null $his_nip_pencetak_stp
 * @property string|null $sys_nc00027$
 * @property string|null $sys_nc00028$
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|HisStp newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|HisStp newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|HisStp query()
 *
 * @mixin \Eloquent
 */
class HisStp extends Model
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
        'thn_pajak_stp',
        'indeks_perubahan_stp',
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
        'thn_pajak_stp',
        'indeks_perubahan_stp',
        'kd_kanwil',
        'kd_kppbb',
        'jns_sk',
        'no_sk',
        'his_kd_bank_tunggal',
        'his_kd_bank_persepsi',
        'his_kd_tp',
        'his_tgl_jatuh_tempo_stp',
        'his_tgl_terbit_stp',
        'his_sisa_pajak_terhutang_stp',
        'his_jml_lambat_bulan_denda_stp',
        'his_rupiah_denda_stp',
        'his_jml_pajak_terhutang_stp',
        'his_persetujuan_stp_kp_pbb',
        'his_kd_jns_ketetapan',
        'his_tgl_cetak_stp',
        'his_nip_pencetak_stp',
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
