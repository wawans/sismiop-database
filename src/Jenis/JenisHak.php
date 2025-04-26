<?php

namespace Wawans\SismiopDatabase\Jenis;

use Wawans\SismiopDatabase\Model;

/**
 * @property string $kd_jns_hak
 * @property string|null $ket_hak
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|JenisHak newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|JenisHak newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|JenisHak query()
 *
 * @mixin \Eloquent
 */
class JenisHak extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'kd_jns_hak';

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
        'kd_jns_hak',
        'ket_hak',
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
