<?php

namespace Wawans\SismiopDatabase;

/**
 * @property string $nip
 * @property string|null $menu
 * @property string|null $tgl_update
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MenuPegawai newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MenuPegawai newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MenuPegawai query()
 *
 * @mixin \Eloquent
 */
class MenuPegawai extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'nip';

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
        'nip',
        'menu',
        'tgl_update',
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
