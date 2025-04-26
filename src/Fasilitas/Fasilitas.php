<?php

namespace Wawans\SismiopDatabase\Fasilitas;

use Wawans\SismiopDatabase\Model;

/**
 * @property string $kd_fasilitas
 * @property string|null $nm_fasilitas
 * @property string|null $satuan_fasilitas
 * @property string|null $status_fasilitas
 * @property string|null $ketergantungan
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Fasilitas newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Fasilitas newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Fasilitas query()
 *
 * @mixin \Eloquent
 */
class Fasilitas extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'kd_fasilitas';

    /**
     * The "type" of the primary key ID.
     *
     * @var string
     */
    protected $keyType = 'string';

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'kd_fasilitas',
        'nm_fasilitas',
        'satuan_fasilitas',
        'status_fasilitas',
        'ketergantungan',
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
