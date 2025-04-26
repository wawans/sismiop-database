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
 * @property string $paspor
 * @property string|null $nama
 * @property string|null $tgl_awal_berlaku
 * @property string|null $tgl_akhir_berlaku
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NopPaspor newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NopPaspor newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NopPaspor query()
 *
 * @mixin \Eloquent
 */
class NopPaspor extends Model
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
        'paspor',
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
        'paspor',
        'nama',
        'tgl_awal_berlaku',
        'tgl_akhir_berlaku',
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
