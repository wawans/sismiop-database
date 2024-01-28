<?php

namespace Wawans\SismiopDatabase;

use Wawans\SismiopDatabase\Model;

class CetakMasal extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = [
        'kd_propinsi',
        'kd_dati2',
        'kd_kecamatan',
        'kd_kelurahan',
        'thn_cetak_masal',
        'indeks_cetak_masal',
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
        'kd_propinsi',
        'kd_dati2',
        'kd_kecamatan',
        'kd_kelurahan',
        'thn_cetak_masal',
        'indeks_cetak_masal',
        'tgl_cetak_masal',
        'nip_pencetak_masal',
        'jml_sppt',
        'jml_pbb_yg_harus_dibayar',
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
