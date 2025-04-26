<?php

namespace Wawans\SismiopDatabase\Log;

use Wawans\SismiopDatabase\Model;

/**
 * @property string $kd_propinsi
 * @property string $kd_dati2
 * @property string $kd_kecamatan
 * @property string $kd_kelurahan
 * @property string|null $status_log_dbkb
 * @property string|null $tgl_rekam_log_dbkb
 * @property string|null $nip_perekam_log_dbkb
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LogDbkb newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LogDbkb newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LogDbkb query()
 *
 * @mixin \Eloquent
 */
class LogDbkb extends Model
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
        'status_log_dbkb',
        'tgl_rekam_log_dbkb',
        'nip_perekam_log_dbkb',
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
