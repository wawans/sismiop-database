<?php

namespace Wawans\SismiopDatabase\Jenis;

use Wawans\SismiopDatabase\Model;

/**
 * @property string $kd_klu
 * @property string|null $ket_klu
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|JenisKlu newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|JenisKlu newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|JenisKlu query()
 *
 * @mixin \Eloquent
 */
class JenisKlu extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'kd_klu';

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
        'kd_klu',
        'ket_klu',
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
