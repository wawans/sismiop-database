<?php

namespace Wawans\SismiopDatabase;

use Wawans\SismiopDatabase\Model;

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
