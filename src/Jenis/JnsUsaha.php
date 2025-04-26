<?php

namespace Wawans\SismiopDatabase\Jenis;

use Wawans\SismiopDatabase\Model;

/**
 * @property string $kd_jns_usaha
 * @property string|null $ket_jns_usaha
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|JnsUsaha newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|JnsUsaha newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|JnsUsaha query()
 *
 * @mixin \Eloquent
 */
class JnsUsaha extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'kd_jns_usaha';

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
        'kd_jns_usaha',
        'ket_jns_usaha',
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
