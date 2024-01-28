<?php

namespace Wawans\SismiopDatabase\Pembatalan;

use Wawans\SismiopDatabase\Model;

class PembatalanSpmkp extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = [
        'kd_kanwil',
        'kd_kppbb',
        'no_sk_pembatalan_spmkp',
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
        'kd_kanwil',
        'kd_kppbb',
        'no_sk_pembatalan_spmkp',
        'no_spmkp',
        'tgl_pembatalan_spmkp',
        'tgl_cetak_pembatalan_spmkp',
        'nip_pencetak_pembatalan_spmkp',
        'alasan_pembatalan_spmkp',
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
