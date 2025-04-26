<?php

namespace Wawans\SismiopDatabase\Rek;

use Wawans\SismiopDatabase\Model;

/**
 * @property string $no_pelanggan_gas
 * @property string $thn_gas
 * @property string $bulan_ke_gas
 * @property string|null $tagihan_gas
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RekGas newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RekGas newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RekGas query()
 *
 * @mixin \Eloquent
 */
class RekGas extends Model
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
