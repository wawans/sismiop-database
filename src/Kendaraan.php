<?php

namespace Wawans\SismiopDatabase;

/**
 * @property string $no_polisi
 * @property string|null $kd_kendaraan
 * @property string|null $kd_propinsi
 * @property string|null $kd_dati2
 * @property string|null $kd_kecamatan
 * @property string|null $kd_kelurahan
 * @property string|null $kd_blok
 * @property string|null $no_urut
 * @property string|null $kd_jns_op
 * @property string|null $no_bng
 * @property string|null $merk
 * @property string|null $tahun
 * @property string|null $nama_pemilik
 * @property string|null $status_kendaraan
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Kendaraan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Kendaraan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Kendaraan query()
 *
 * @mixin \Eloquent
 */
class Kendaraan extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'no_polisi';

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
        'no_polisi',
        'kd_kendaraan',
        'kd_propinsi',
        'kd_dati2',
        'kd_kecamatan',
        'kd_kelurahan',
        'kd_blok',
        'no_urut',
        'kd_jns_op',
        'no_bng',
        'merk',
        'tahun',
        'nama_pemilik',
        'status_kendaraan',
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
