<?php

namespace Wawans\SismiopDatabase\Rek;

use Wawans\SismiopDatabase\Model;

/**
 * @property string $kd_area
 * @property string $no_telepon
 * @property string $thn_telepon
 * @property string $bulan_ke_telepon
 * @property string|null $tagihan_telepon
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RekTelepon newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RekTelepon newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RekTelepon query()
 *
 * @mixin \Eloquent
 */
class RekTelepon extends Model
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
