<?php

namespace Wawans\SismiopDatabase\Ref;

use Wawans\SismiopDatabase\Model;

/**
 * @property string $kd_ref
 * @property string $keterangan
 * @property string $nm_ref
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefUmum newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefUmum newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefUmum query()
 *
 * @mixin \Eloquent
 */
class RefUmum extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'kd_ref';

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
    protected $fillable = [];

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
