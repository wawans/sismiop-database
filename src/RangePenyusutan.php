<?php

namespace Wawans\SismiopDatabase;

/**
 * @property string $kd_range_penyusutan
 * @property string|null $nilai_min_penyusutan
 * @property string|null $nilai_max_penyusutan
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RangePenyusutan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RangePenyusutan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RangePenyusutan query()
 *
 * @mixin \Eloquent
 */
class RangePenyusutan extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'kd_range_penyusutan';

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
        'kd_range_penyusutan',
        'nilai_min_penyusutan',
        'nilai_max_penyusutan',
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
