<?php

namespace Wawans\SismiopDatabase;

/**
 * @property string $kd_jns_pelayanan
 * @property string|null $sppt_pelayanan
 * @property string|null $stts_pelayanan
 * @property string|null $dhkp_pelayanan
 * @property string|null $sk_pelayanan
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KeluaranPst newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KeluaranPst newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KeluaranPst query()
 *
 * @mixin \Eloquent
 */
class KeluaranPst extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'kd_jns_pelayanan';

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
        'kd_jns_pelayanan',
        'sppt_pelayanan',
        'stts_pelayanan',
        'dhkp_pelayanan',
        'sk_pelayanan',
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
