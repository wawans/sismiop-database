<?php

namespace Wawans\SismiopDatabase;

/**
 * @property string $mfnpwp_comp
 * @property string $mfkpp_comp
 * @property string $mfcab_comp
 * @property string $mfnpwp_pemegang
 * @property string $mfkpp_pemegang
 * @property string $mfcab_pemegang
 * @property string|null $nama_pemegang
 * @property string|null $alamat_pemegang
 * @property string|null $jumlah_saham
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemegangSaham newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemegangSaham newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemegangSaham query()
 *
 * @mixin \Eloquent
 */
class PemegangSaham extends Model
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
        'mfnpwp_pemegang',
        'mfkpp_pemegang',
        'mfcab_pemegang',
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
        'mfnpwp_pemegang',
        'mfkpp_pemegang',
        'mfcab_pemegang',
        'nama_pemegang',
        'alamat_pemegang',
        'jumlah_saham',
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
