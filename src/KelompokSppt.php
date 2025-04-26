<?php

namespace Wawans\SismiopDatabase;

/**
 * @property string $kd_kelompok_sppt
 * @property string|null $nama_kelompok_sppt
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KelompokSppt newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KelompokSppt newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KelompokSppt query()
 *
 * @mixin \Eloquent
 */
class KelompokSppt extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'kd_kelompok_sppt';

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
        'kd_kelompok_sppt',
        'nama_kelompok_sppt',
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
