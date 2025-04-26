<?php

namespace Wawans\SismiopDatabase\His;

use Wawans\SismiopDatabase\Model;

/**
 * @property string $kd_propinsi_lama
 * @property string $kd_dati2_lama
 * @property string $kd_kecamatan_lama
 * @property string $kd_kelurahan_lama
 * @property string $kd_blok_lama
 * @property string $no_urut_lama
 * @property string $kd_jns_op_lama
 * @property string $kd_propinsi_baru
 * @property string $kd_dati2_baru
 * @property string $kd_kecamatan_baru
 * @property string $kd_kelurahan_baru
 * @property string $kd_blok_baru
 * @property string $no_urut_baru
 * @property string $kd_jns_op_baru
 * @property string|null $nama_wp_lama
 * @property string|null $alamat_wp_lama
 * @property string|null $pbb_lama
 * @property string|null $nama_wp_baru
 * @property string|null $alamat_wp_baru
 * @property string|null $pbb_baru
 * @property string $tgl_perubahan
 * @property string $tahun_pelayanan
 * @property string $bundel_pelayanan
 * @property string $no_urut_pelayanan
 * @property string $thn_pajak
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|HisPerubahanSppt newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|HisPerubahanSppt newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|HisPerubahanSppt query()
 *
 * @mixin \Eloquent
 */
class HisPerubahanSppt extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = [
        'kd_propinsi_lama',
        'kd_dati2_lama',
        'kd_kecamatan_lama',
        'kd_kelurahan_lama',
        'kd_blok_lama',
        'no_urut_lama',
        'kd_jns_op_lama',
        'kd_propinsi_baru',
        'kd_dati2_baru',
        'kd_kecamatan_baru',
        'kd_kelurahan_baru',
        'kd_blok_baru',
        'no_urut_baru',
        'kd_jns_op_baru',
        'tahun_pelayanan',
        'bundel_pelayanan',
        'no_urut_pelayanan',
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
        'kd_propinsi_lama',
        'kd_dati2_lama',
        'kd_kecamatan_lama',
        'kd_kelurahan_lama',
        'kd_blok_lama',
        'no_urut_lama',
        'kd_jns_op_lama',
        'kd_propinsi_baru',
        'kd_dati2_baru',
        'kd_kecamatan_baru',
        'kd_kelurahan_baru',
        'kd_blok_baru',
        'no_urut_baru',
        'kd_jns_op_baru',
        'nama_wp_lama',
        'alamat_wp_lama',
        'pbb_lama',
        'nama_wp_baru',
        'alamat_wp_baru',
        'pbb_baru',
        'tgl_perubahan',
        'tahun_pelayanan',
        'bundel_pelayanan',
        'no_urut_pelayanan',
        'thn_pajak',
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
