<?php

namespace Wawans\SismiopDatabase\His;

use Wawans\SismiopDatabase\Model;

/**
 * @property string $username
 * @property string $tgl_ubah
 * @property string|null $user_pengubah
 * @property string|null $ket
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|HisPemakai newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|HisPemakai newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|HisPemakai query()
 *
 * @mixin \Eloquent
 */
class HisPemakai extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = [
        'username',
        'tgl_ubah',
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
        'username',
        'tgl_ubah',
        'user_pengubah',
        'ket',
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
