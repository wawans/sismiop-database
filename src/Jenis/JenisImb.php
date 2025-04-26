<?php

namespace Wawans\SismiopDatabase\Jenis;

use Wawans\SismiopDatabase\Model;

/**
 * @property string $kd_jns_imb
 * @property string|null $ket_imb
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|JenisImb newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|JenisImb newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|JenisImb query()
 *
 * @mixin \Eloquent
 */
class JenisImb extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'kd_jns_imb';

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
        'kd_jns_imb',
        'ket_imb',
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
