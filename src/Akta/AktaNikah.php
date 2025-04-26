<?php

namespace Wawans\SismiopDatabase\Akta;

use Wawans\SismiopDatabase\Model;

/**
 * @property string $no_akte_nikah
 * @property string|null $no_penduduk
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AktaNikah newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AktaNikah newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AktaNikah query()
 *
 * @mixin \Eloquent
 */
class AktaNikah extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'no_akte_nikah';

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
        'no_akte_nikah',
        'no_penduduk',
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
