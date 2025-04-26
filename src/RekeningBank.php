<?php

namespace Wawans\SismiopDatabase;

/**
 * @property string $no_rekening
 * @property string|null $no_penduduk
 * @property string|null $ket_bank
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RekeningBank newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RekeningBank newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RekeningBank query()
 *
 * @mixin \Eloquent
 */
class RekeningBank extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'no_rekening';

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
        'no_rekening',
        'no_penduduk',
        'ket_bank',
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
