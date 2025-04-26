<?php

namespace Wawans\SismiopDatabase;

/**
 * @property string $kd_propinsi
 * @property string $kd_dati2
 * @property string $thn_lap_pembagian
 * @property string $bln_lap_pembagian
 * @property string|null $kd_mata_anggaran
 * @property string|null $jns_mata_anggaran
 * @property string|null $no_sk_pembagian
 * @property string|null $tgl_sk_pembagian
 * @property string|null $no_spmphp
 * @property string|null $tgl_spmphp
 * @property string|null $kd_program
 * @property string|null $kd_unit
 * @property string|null $kd_lokasi
 * @property string|null $potongan
 * @property string|null $lokasi_kpkn
 * @property string|null $tgl_rekam_lap_pembagian
 * @property string|null $nip_rekam_lap_pembagian
 * @property string|null $kd_proyek
 * @property string|null $sys_nc00019$
 * @property string|null $sys_nc00020$
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LaporanPembagian newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LaporanPembagian newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LaporanPembagian query()
 *
 * @mixin \Eloquent
 */
class LaporanPembagian extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = [
        'kd_propinsi',
        'kd_dati2',
        'thn_lap_pembagian',
        'bln_lap_pembagian',
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
        'thn_lap_pembagian',
        'bln_lap_pembagian',
        'kd_mata_anggaran',
        'jns_mata_anggaran',
        'no_sk_pembagian',
        'tgl_sk_pembagian',
        'no_spmphp',
        'tgl_spmphp',
        'kd_program',
        'kd_unit',
        'kd_lokasi',
        'potongan',
        'lokasi_kpkn',
        'tgl_rekam_lap_pembagian',
        'nip_rekam_lap_pembagian',
        'kd_proyek',
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
