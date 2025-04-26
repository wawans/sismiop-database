<?php

namespace Wawans\SismiopDatabase;

/**
 * @property string $kd_propinsi
 * @property string $kd_dati2
 * @property string $kd_kecamatan
 * @property string $kd_kelurahan
 * @property string $kd_blok_penghapusan_bng
 * @property string $no_urut_penghapusan_bng
 * @property string $kd_jns_op_penghapusan_bng
 * @property string $no_bng_penghapusan
 * @property string $indeks_penghapusan_bng
 * @property string|null $thn_pajak_penghapusan_bng
 * @property string|null $no_formulir_penghapusan_bng
 * @property string|null $luas_bng_penghapusan
 * @property string|null $nilai_bng_penghapusan
 * @property string|null $tgl_penghapusan_bng
 * @property string|null $nip_perekam_penghapusan_bng
 * @property string|null $sys_nc00016$
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PenghapusanBng newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PenghapusanBng newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PenghapusanBng query()
 *
 * @mixin \Eloquent
 */
class PenghapusanBng extends Model
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
        'kd_blok_penghapusan_bng',
        'no_urut_penghapusan_bng',
        'kd_jns_op_penghapusan_bng',
        'no_bng_penghapusan',
        'indeks_penghapusan_bng',
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
        'kd_blok_penghapusan_bng',
        'no_urut_penghapusan_bng',
        'kd_jns_op_penghapusan_bng',
        'no_bng_penghapusan',
        'indeks_penghapusan_bng',
        'thn_pajak_penghapusan_bng',
        'no_formulir_penghapusan_bng',
        'luas_bng_penghapusan',
        'nilai_bng_penghapusan',
        'tgl_penghapusan_bng',
        'nip_perekam_penghapusan_bng',
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
