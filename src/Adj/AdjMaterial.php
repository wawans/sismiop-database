<?php

namespace Wawans\SismiopDatabase\Adj;

use Wawans\SismiopDatabase\Model;

/**
 * @property string $kd_pekerjaan
 * @property string $kd_kegiatan
 * @property string|null $pct_adj_mtrl_1
 * @property string|null $pct_adj_mtrl_2
 * @property string|null $deskripsi_adj
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AdjMaterial newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AdjMaterial newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AdjMaterial query()
 *
 * @mixin \Eloquent
 */
class AdjMaterial extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = [
        'kd_pekerjaan',
        'kd_kegiatan',
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
        'kd_pekerjaan',
        'kd_kegiatan',
        'pct_adj_mtrl_1',
        'pct_adj_mtrl_2',
        'deskripsi_adj',
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
