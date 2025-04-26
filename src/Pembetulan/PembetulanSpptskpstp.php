<?php

namespace Wawans\SismiopDatabase\Pembetulan;

use Wawans\SismiopDatabase\Model;

/**
 * @property string $kd_kanwil
 * @property string $kd_kppbb
 * @property string $thn_pelayanan
 * @property string $bundel_pelayanan
 * @property string $no_urut_pelayanan
 * @property string $kd_propinsi_pemohon
 * @property string $kd_dati2_pemohon
 * @property string $kd_kecamatan_pemohon
 * @property string $kd_kelurahan_pemohon
 * @property string $kd_blok_pemohon
 * @property string $no_urut_pemohon
 * @property string $kd_jns_op_pemohon
 * @property string|null $thn_pembetulan
 * @property string|null $jns_sk
 * @property string|null $no_sk
 * @property string|null $pbl_nama_wp
 * @property string|null $pbl_jalan_wp
 * @property string|null $pbl_blok_kav_no_wp
 * @property string|null $pbl_luas_bumi
 * @property string|null $pbl_luas_bng
 * @property string|null $pbl_njop_bumi
 * @property string|null $pbl_njop_bng
 * @property string|null $pbl_pbb
 * @property string|null $pbl_status
 * @property string|null $jns_surat_yg_dibetulkan
 * @property string|null $no_surat_yg_dibetulkan
 * @property string|null $tgl_surat_yg_dibetulkan
 * @property string|null $sys_nc00028$
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PembetulanSpptskpstp newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PembetulanSpptskpstp newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PembetulanSpptskpstp query()
 *
 * @mixin \Eloquent
 */
class PembetulanSpptskpstp extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = [
        'kd_kanwil',
        'kd_kppbb',
        'thn_pelayanan',
        'bundel_pelayanan',
        'no_urut_pelayanan',
        'kd_propinsi_pemohon',
        'kd_dati2_pemohon',
        'kd_kecamatan_pemohon',
        'kd_kelurahan_pemohon',
        'kd_blok_pemohon',
        'no_urut_pemohon',
        'kd_jns_op_pemohon',
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
        'kd_kanwil',
        'kd_kppbb',
        'thn_pelayanan',
        'bundel_pelayanan',
        'no_urut_pelayanan',
        'kd_propinsi_pemohon',
        'kd_dati2_pemohon',
        'kd_kecamatan_pemohon',
        'kd_kelurahan_pemohon',
        'kd_blok_pemohon',
        'no_urut_pemohon',
        'kd_jns_op_pemohon',
        'thn_pembetulan',
        'jns_sk',
        'no_sk',
        'pbl_nama_wp',
        'pbl_jalan_wp',
        'pbl_blok_kav_no_wp',
        'pbl_luas_bumi',
        'pbl_luas_bng',
        'pbl_njop_bumi',
        'pbl_njop_bng',
        'pbl_pbb',
        'pbl_status',
        'jns_surat_yg_dibetulkan',
        'no_surat_yg_dibetulkan',
        'tgl_surat_yg_dibetulkan',
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
