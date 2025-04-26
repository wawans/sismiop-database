<?php

namespace Wawans\SismiopDatabase\Rek;

use Wawans\SismiopDatabase\Model;

/**
 * @property string $no_pelanggan_pam
 * @property string $thn_pam
 * @property string $bulan_ke_pam
 * @property string|null $tagihan_pam
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RekPam newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RekPam newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RekPam query()
 *
 * @mixin \Eloquent
 */
class RekPam extends Model
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
