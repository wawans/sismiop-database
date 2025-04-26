<?php

namespace Wawans\SismiopDatabase;

/**
 * @property string $no_pegawai
 * @property string|null $no_penduduk
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Kepegawaian newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Kepegawaian newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Kepegawaian query()
 *
 * @mixin \Eloquent
 */
class Kepegawaian extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'no_pegawai';

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
        'no_pegawai',
        'no_penduduk',
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
