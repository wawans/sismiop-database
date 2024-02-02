<?php

namespace Wawans\SismiopDatabase;

use Wawans\SismiopDatabase\Model;

class CompPorto extends Model
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
        'tahun_porto',
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
        'tahun_porto',
        'nm_kap',
        'kd_stat_fin_rep',
        'kd_pendapat',
        'peredaran_usaha',
        'laba_bruto',
        'pengurang_bruto',
        'hasilan_net_dlm',
        'hasil_net_luar',
        'hasil_net',
        'kompensasi_rugi',
        'pkp',
        'pph_terutang',
        'kredit_pajak',
        'pph_kurang_byr',
        'pajak_masukan',
        'pajak_keluaran',
        'krg_lbh_bayar',
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
