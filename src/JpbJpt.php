<?php

namespace Wawans\SismiopDatabase;

/**
 * @property string $kd_jpb_jpt
 * @property string|null $nm_jpb_jpt
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|JpbJpt newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|JpbJpt newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|JpbJpt query()
 *
 * @mixin \Eloquent
 */
class JpbJpt extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'kd_jpb_jpt';

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
        'kd_jpb_jpt',
        'nm_jpb_jpt',
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
