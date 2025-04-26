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
 * @property string $thn_pajak_sppt
 * @property string|null $alasan_sppt_kembali
 * @property string|null $tgl_kembali_sppt
 * @property string|null $tgl_rekam_kembali_sppt
 * @property string|null $nip_perekam_kembali_sppt
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PengembalianSppt newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PengembalianSppt newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PengembalianSppt query()
 *
 * @mixin \Eloquent
 */
class PengembalianSppt extends Model
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
        'alasan_sppt_kembali',
        'tgl_kembali_sppt',
        'tgl_rekam_kembali_sppt',
        'nip_perekam_kembali_sppt',
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
