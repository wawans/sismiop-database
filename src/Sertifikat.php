<?php

namespace Wawans\SismiopDatabase;

/**
 * @property string $no_sertifikat
 * @property string|null $kd_jns_hak
 * @property string|null $nama_sertifikat
 * @property string|null $tgl_sertifikat
 * @property string|null $kd_propinsi
 * @property string|null $kd_dati2
 * @property string|null $kd_kecamatan
 * @property string|null $kd_kelurahan
 * @property string|null $kd_blok
 * @property string|null $no_urut
 * @property string|null $kd_jns_op
 * @property string|null $no_bumi
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Sertifikat newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Sertifikat newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Sertifikat query()
 *
 * @mixin \Eloquent
 */
class Sertifikat extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'no_sertifikat';

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
        'no_sertifikat',
        'kd_jns_hak',
        'nama_sertifikat',
        'tgl_sertifikat',
        'kd_propinsi',
        'kd_dati2',
        'kd_kecamatan',
        'kd_kelurahan',
        'kd_blok',
        'no_urut',
        'kd_jns_op',
        'no_bumi',
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
