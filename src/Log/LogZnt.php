<?php

namespace Wawans\SismiopDatabase\Log;

use Wawans\SismiopDatabase\Model;

/**
 * @property string $kd_propinsi
 * @property string $kd_dati2
 * @property string $kd_kecamatan
 * @property string $kd_kelurahan
 * @property string|null $status_log_znt
 * @property string|null $tgl_rekam_log_znt
 * @property string|null $nip_perekam_log_znt
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LogZnt newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LogZnt newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LogZnt query()
 *
 * @mixin \Eloquent
 */
class LogZnt extends Model
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
        'status_log_znt',
        'tgl_rekam_log_znt',
        'nip_perekam_log_znt',
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
