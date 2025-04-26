<?php

namespace Wawans\SismiopDatabase\Sk;

use Wawans\SismiopDatabase\Model;

/**
 * @property string|null $no_sk
 * @property string|null $tgl_sk
 * @property string|null $no_uhp
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SkPembetulan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SkPembetulan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SkPembetulan query()
 *
 * @mixin \Eloquent
 */
class SkPembetulan extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id';

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
        'no_sk',
        'tgl_sk',
        'no_uhp',
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
