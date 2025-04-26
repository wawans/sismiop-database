<?php

namespace Wawans\SismiopDatabase;

/**
 * @property string $kd_propinsi
 * @property string $kd_dati2
 * @property string $kd_kecamatan
 * @property string $kd_kelurahan
 * @property string $kd_blok_penghapusan
 * @property string $no_urut_penghapusan
 * @property string $kd_jns_op_penghapusan
 * @property string|null $thn_pajak_penghapusan_op
 * @property string|null $no_formulir_penghapusan_op
 * @property string|null $nama_wp_penghapusan
 * @property string|null $kd_znt_penghapusan
 * @property string|null $luas_bumi_penghapusan
 * @property string|null $nilai_bumi_penghapusan
 * @property string|null $pbb_hapus_op
 * @property string|null $tgl_penghapusan_op
 * @property string|null $nip_perekam_penghapusan_op
 * @property string|null $sys_nc00017$
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PenghapusanOp newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PenghapusanOp newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PenghapusanOp query()
 *
 * @mixin \Eloquent
 */
class PenghapusanOp extends Model
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
        'kd_blok_penghapusan',
        'no_urut_penghapusan',
        'kd_jns_op_penghapusan',
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
        'kd_blok_penghapusan',
        'no_urut_penghapusan',
        'kd_jns_op_penghapusan',
        'thn_pajak_penghapusan_op',
        'no_formulir_penghapusan_op',
        'nama_wp_penghapusan',
        'kd_znt_penghapusan',
        'luas_bumi_penghapusan',
        'nilai_bumi_penghapusan',
        'pbb_hapus_op',
        'tgl_penghapusan_op',
        'nip_perekam_penghapusan_op',
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
