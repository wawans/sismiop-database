<?php

namespace Wawans\SismiopDatabase;

/**
 * @property string $kd_pekerjaan
 * @property string $kd_kegiatan
 * @property string|null $nm_kegiatan
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PekerjaanKegiatan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PekerjaanKegiatan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PekerjaanKegiatan query()
 *
 * @mixin \Eloquent
 */
class PekerjaanKegiatan extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = [
        'kd_pekerjaan',
        'kd_kegiatan',
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
        'kd_pekerjaan',
        'kd_kegiatan',
        'nm_kegiatan',
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
