<?php

namespace Wawans\SismiopDatabase\Jenis;

use Wawans\SismiopDatabase\Model;

/**
 * @property string $kd_kendaraan
 * @property string|null $ket_kendaraan
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|JnsKendaraan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|JnsKendaraan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|JnsKendaraan query()
 *
 * @mixin \Eloquent
 */
class JnsKendaraan extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'kd_kendaraan';

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
        'kd_kendaraan',
        'ket_kendaraan',
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
