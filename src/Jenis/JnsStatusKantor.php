<?php

namespace Wawans\SismiopDatabase\Jenis;

use Wawans\SismiopDatabase\Model;

/**
 * @property string $kd_stat_kantor
 * @property string|null $ket_stat_kantor
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|JnsStatusKantor newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|JnsStatusKantor newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|JnsStatusKantor query()
 *
 * @mixin \Eloquent
 */
class JnsStatusKantor extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'kd_stat_kantor';

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
        'kd_stat_kantor',
        'ket_stat_kantor',
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
