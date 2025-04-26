<?php

namespace Wawans\SismiopDatabase\Akta;

use Wawans\SismiopDatabase\Model;

/**
 * @property string $no_akta_lahir
 * @property string|null $no_penduduk
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AktaLahir newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AktaLahir newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AktaLahir query()
 *
 * @mixin \Eloquent
 */
class AktaLahir extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'no_akta_lahir';

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
        'no_akta_lahir',
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
