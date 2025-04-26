<?php

namespace Wawans\SismiopDatabase;

/**
 * @property string $no_penduduk
 * @property string|null $no_kk
 * @property string|null $kd_stat_kawin
 * @property string|null $kd_status
 * @property string|null $nama
 * @property string|null $tgl_lahir
 * @property string|null $kota_lahir
 * @property string|null $jns_kelamin
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Penduduk newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Penduduk newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Penduduk query()
 *
 * @mixin \Eloquent
 */
class Penduduk extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'no_penduduk';

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
        'no_penduduk',
        'no_kk',
        'kd_stat_kawin',
        'kd_status',
        'nama',
        'tgl_lahir',
        'kota_lahir',
        'jns_kelamin',
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
