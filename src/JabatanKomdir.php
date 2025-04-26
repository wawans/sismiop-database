<?php

namespace Wawans\SismiopDatabase;

/**
 * @property string $kd_jabatan_komdir
 * @property string|null $ket_jabatan
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|JabatanKomdir newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|JabatanKomdir newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|JabatanKomdir query()
 *
 * @mixin \Eloquent
 */
class JabatanKomdir extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'kd_jabatan_komdir';

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
        'kd_jabatan_komdir',
        'ket_jabatan',
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
