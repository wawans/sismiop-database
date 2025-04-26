<?php

namespace Wawans\SismiopDatabase;

/**
 * @property string $kd_pekerjaan
 * @property string|null $nm_pekerjaan
 * @property string|null $status_pekerjaan
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Pekerjaan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Pekerjaan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Pekerjaan query()
 *
 * @mixin \Eloquent
 */
class Pekerjaan extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'kd_pekerjaan';

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
        'kd_pekerjaan',
        'nm_pekerjaan',
        'status_pekerjaan',
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
