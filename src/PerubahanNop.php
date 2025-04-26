<?php

namespace Wawans\SismiopDatabase;

/**
 * @property string $kd_propinsi kd_propinsi
 * @property string $kd_dati2 kd_dati2
 * @property string $kd_kecamatan kd_kecamatan
 * @property string $kd_kelurahan kd_kelurahan
 * @property string $kd_blok kd_blok
 * @property string $no_urut no_urut
 * @property string $kd_jns_op kd_jns_op
 * @property string $tgl_perubahan_nop tgl_perubahan_nop
 * @property string|null $kd_propinsi_asal kd_propinsi_asal
 * @property string|null $kd_dati2_asal kd_dati2_asal
 * @property string|null $kd_kecamatan_asal kd_kecamatan_asal
 * @property string|null $kd_kelurahan_asal kd_kelurahan_asal
 * @property string|null $kd_blok_asal kd_blok_asal
 * @property string|null $no_urut_asal no_urut_asal
 * @property string|null $kd_jns_op_asal kd_jns_op_asal
 * @property string|null $nip_perubah_nop nip_perubah_nop
 * @property string|null $status_perubahan_nop status_perubahan_nop
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PerubahanNop newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PerubahanNop newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PerubahanNop query()
 *
 * @mixin \Eloquent
 */
class PerubahanNop extends Model
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
        'tgl_perubahan_nop',
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
        'tgl_perubahan_nop',
        'kd_propinsi_asal',
        'kd_dati2_asal',
        'kd_kecamatan_asal',
        'kd_kelurahan_asal',
        'kd_blok_asal',
        'no_urut_asal',
        'kd_jns_op_asal',
        'nip_perubah_nop',
        'status_perubahan_nop',
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
