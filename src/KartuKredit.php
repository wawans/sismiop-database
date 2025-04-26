<?php

namespace Wawans\SismiopDatabase;

/**
 * @property string $no_kartu
 * @property string|null $no_penduduk
 * @property string|null $ket_kartu
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KartuKredit newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KartuKredit newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KartuKredit query()
 *
 * @mixin \Eloquent
 */
class KartuKredit extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'no_kartu';

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
        'no_kartu',
        'no_penduduk',
        'ket_kartu',
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
