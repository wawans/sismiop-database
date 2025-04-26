<?php

namespace Wawans\SismiopDatabase\Rek;

use Wawans\SismiopDatabase\Model;

/**
 * @property string $no_pelanggan_pln
 * @property string $thn_pln
 * @property string $bulan_ke_pln
 * @property string|null $tagihan_pln
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RekListrik newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RekListrik newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RekListrik query()
 *
 * @mixin \Eloquent
 */
class RekListrik extends Model
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
