<?php

namespace Wawans\SismiopDatabase;

/**
 * @property string $mfnpwp_comp
 * @property string $mfkpp_comp
 * @property string $mfcab_comp
 * @property string $mfnpwp_komdir
 * @property string $mfkpp_komdir
 * @property string $mfcab_kokmdir
 * @property string|null $kd_jabatan_komdir
 * @property string|null $nama_komdir
 * @property string|null $alamat_komdir
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Komdir newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Komdir newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Komdir query()
 *
 * @mixin \Eloquent
 */
class Komdir extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = [
        'mfnpwp_comp',
        'mfkpp_comp',
        'mfcab_comp',
        'mfnpwp_komdir',
        'mfkpp_komdir',
        'mfcab_kokmdir',
    ];

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
        'mfnpwp_comp',
        'mfkpp_comp',
        'mfcab_comp',
        'mfnpwp_komdir',
        'mfkpp_komdir',
        'mfcab_kokmdir',
        'kd_jabatan_komdir',
        'nama_komdir',
        'alamat_komdir',
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
