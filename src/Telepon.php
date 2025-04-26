<?php

namespace Wawans\SismiopDatabase;

/**
 * @property string $kd_area
 * @property string $no_telepon
 * @property string|null $kd_propinsi
 * @property string|null $kd_dati2
 * @property string|null $kd_kecamatan
 * @property string|null $kd_kelurahan
 * @property string|null $kd_blok
 * @property string|null $no_urut
 * @property string|null $kd_jns_op
 * @property string|null $no_bng
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Telepon newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Telepon newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Telepon query()
 *
 * @mixin \Eloquent
 */
class Telepon extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = [
        'kd_area',
        'no_telepon',
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
        'kd_area',
        'no_telepon',
        'kd_propinsi',
        'kd_dati2',
        'kd_kecamatan',
        'kd_kelurahan',
        'kd_blok',
        'no_urut',
        'kd_jns_op',
        'no_bng',
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
